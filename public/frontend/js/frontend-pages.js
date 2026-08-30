// Organic multipage frontend interactions (prototype only)
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('a[href="#"]').forEach(function (a) {
    if (!a.hasAttribute("data-bs-toggle"))
      a.addEventListener("click", function (e) {
        e.preventDefault();
      });
  });
  document.querySelectorAll("[data-demo-link]").forEach(function (a) {
    a.addEventListener("click", function (e) {
      e.preventDefault();
      const href = a.getAttribute("href");
      if (href) window.location.href = href;
    });
  });

  // Password toggle
  document.querySelectorAll(".password-toggle").forEach(function (button) {
    button.addEventListener("click", function () {
      const targetSelector = button.getAttribute("data-password-target");
      const passwordInput = document.querySelector(targetSelector);
      if (!passwordInput) return;
      const hideIcon = button.querySelector(".password-icon-hide");
      const showIcon = button.querySelector(".password-icon-show");
      const isHidden = passwordInput.type === "password";
      passwordInput.type = isHidden ? "text" : "password";
      showIcon.classList.toggle("d-none", isHidden);
      hideIcon.classList.toggle("d-none", !isHidden);
      button.setAttribute(
        "aria-label",
        isHidden ? "Hide password" : "Show password",
      );
      button.setAttribute(
        "title",
        isHidden ? "Hide password" : "Show password",
      );
    });
  });

  // Registration password match demo
  const registerForm = document.querySelector("#register-form");
  const registerPassword = document.querySelector("#register-password");
  const confirmPassword = document.querySelector("#register-confirm-password");
  const registerMessage = document.querySelector("#register-password-message");
  if (registerForm && registerPassword && confirmPassword) {
    const checkMatch = function () {
      if (!registerMessage) return true;
      if (!confirmPassword.value) {
        registerMessage.textContent = "Use the same password in both fields.";
        registerMessage.className = "small mt-2 text-secondary";
        return true;
      }
      const same = registerPassword.value === confirmPassword.value;
      registerMessage.textContent = same
        ? "Passwords match."
        : "Passwords do not match.";
      registerMessage.className =
        "small mt-2 " + (same ? "text-success" : "text-danger");
      return same;
    };
    registerPassword.addEventListener("input", checkMatch);
    confirmPassword.addEventListener("input", checkMatch);
    registerForm.addEventListener("submit", function (e) {
      if (registerPassword.value !== confirmPassword.value) {
        e.preventDefault();
        checkMatch();
        confirmPassword.focus();
      }
    });
  }
  // Authentication provider buttons are prototype-only.
  document.querySelectorAll("[data-auth-provider]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const provider = btn.dataset.authProvider;
      if (provider === "email") {
        const email = document.querySelector("#login-email");
        if (email) {
          email.focus();
          email.scrollIntoView({ behavior: "smooth", block: "center" });
        }
        return;
      }
      window.alert(
        "Demo only: " +
          provider +
          " login is not connected to a real authentication provider yet.",
      );
    });
  });

  // Star ratings
  document.querySelectorAll(".rating-select").forEach(function (group) {
    const buttons = group.querySelectorAll("button");
    const hidden = group.parentElement.querySelector("input[type=hidden]");
    buttons.forEach(function (btn, idx) {
      btn.addEventListener("click", function () {
        buttons.forEach((b, i) => b.classList.toggle("active", i <= idx));
        if (hidden) hidden.value = idx + 1;
      });
    });
  });
  // Quantity controls
  document.querySelectorAll("[data-qty]").forEach(function (w) {
    const input = w.querySelector("input");
    const minus = w.querySelector("[data-minus]");
    const plus = w.querySelector("[data-plus]");
    const sync = () => {
      let v = parseInt(input.value || 1, 10);
      if (v < 1) v = 1;
      input.value = v;
    };
    if (minus)
      minus.addEventListener("click", () => {
        input.value = parseInt(input.value || 1, 10) - 1;
        sync();
      });
    if (plus)
      plus.addEventListener("click", () => {
        input.value = parseInt(input.value || 1, 10) + 1;
        sync();
      });
  });
  // Small search demo
  const search = document.querySelector("[data-shop-search]");
  const cards = document.querySelectorAll("[data-product-card]");
  if (search && cards.length) {
    search.addEventListener("input", function () {
      const q = this.value.toLowerCase().trim();
      cards.forEach((c) => {
        c.style.display = c.innerText.toLowerCase().includes(q) ? "" : "none";
      });
    });
  }
  // Copy tracking demo
  document.querySelectorAll("[data-copy]").forEach(function (btn) {
    btn.addEventListener("click", () => {
      const t = document.querySelector(btn.dataset.copy);
      if (t && navigator.clipboard) {
        navigator.clipboard.writeText(t.value || t.textContent || "");
        btn.textContent = "Copied";
        setTimeout(() => (btn.textContent = "Copy"), 1200);
      }
    });
  });

  // Bootstrap Tooltip Initialization

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
      placement: 'top'
    })
  });


  // Logout
  const logoutBtn = document.getElementById("logout-btn");
  if (!logoutBtn) return;
  logoutBtn.addEventListener("click", function (event) {
    event.preventDefault();

    Swal.fire({
      title: "Logout?",
      text: "Are you sure you want to logout from your account?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, Logout",
      cancelButtonText: "Cancel",
      reverseButtons: true,
      customClass: {
        popup: "organic-swal",
        confirmButton: "btn btn-primary rounded-pill px-4",
        cancelButton: "btn btn-outline-secondary rounded-pill px-4",
      },
      buttonsStyling: false,
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Logged Out",
          text: "You have been successfully logged out.",
          icon: "success",
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
          customClass: {
            popup: "organic-swal",
          },
        }).then(() => {
          window.location.href = "{{ url(" / ") }}";
          document.getElementById("logout-form").submit();
        });
      }
    });
  });
});

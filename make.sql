INSERT INTO `product_categories`(`id`, `category_name`, `created_at`) VALUES 
(1,'Fruits and Vegetables','2026-08-16 19:32:43'),
(2,'Meat and Poultry','2026-08-16 19:32:45'),
(3,'Fish and Seafood','2026-08-16 19:32:47'),
(4,'Dairy Products','2026-08-16 19:32:49'),
(5,'Eggs','2026-08-16 19:32:51'),
(6,'Deli Items','2026-08-16 19:32:53'),
(7,'Grains and Pulses','2026-08-16 19:32:55'),
(8,'Pasta and Noodles','2026-08-16 19:32:57'),
(9,'Cooking Oils and Ghee','2026-08-16 19:32:59'),
(10,'Spices and Condiments','2026-08-16 19:33:01'),
(11,'Canned and Jarred Goods','2026-08-16 19:33:03'),
(12,'Baking Essentials','2026-08-16 19:33:05'),
(13,'Baked Goods','2026-08-16 19:33:07'),
(14,'Salty Snacks','2026-08-16 19:33:09'),
(15,'Sweets and Confectionery','2026-08-16 19:33:11'),
(16,'Hot Drinks','2026-08-16 19:32:43'),
(17,'Cold Drinks','2026-08-16 19:33:45'),
(18,'Frozen Meals','2026-08-16 19:33:47'),
(19,'Ice Cream','2026-08-16 19:33:49'),
(20,'Cleaning Supplies','2026-08-16 19:34:51'),
(21,'Paper Goods','2026-08-16 19:35:43'),
(22,'Personal Care','2026-08-16 19:36:43'),
(23,'Baby Care','2026-08-16 19:38:43');



-- products

INSERT INTO `products` (`id`, `barcode`, `name`, `product_category_id`, `selling_price`, `created_at`) VALUES 
(1, '89400000000101', 'Deshi Shada Gajar (Local Carrots)', 1, '0.00', NOW()),
(2, '89400000000102', 'Bari Begun (Local Eggplant)', 1, '0.00', NOW()),
(3, '89400000000103', 'Deshi Roshun (Local Garlic)', 1, '0.00', NOW()),
(4, '89400000000104', 'Deshi Piyaj (Local Onions)', 1, '0.00', NOW()),
(5, '89400000000105', 'Deshi Alu (Diamond Potatoes)', 1, '0.00', NOW()),
(6, '89400000000106', 'Kachakola (Green Bananas)', 1, '0.00', NOW()),
(7, '89400000000107', 'Shobri Kola (Sabarri Bananas)', 1, '0.00', NOW()),
(8, '89400000000108', 'Sagar Kola (Sagar Bananas)', 1, '0.00', NOW()),
(9, '89400000000109', 'Lal Shak (Red Amaranth bundles)', 1, '0.00', NOW()),
(10, '89400000000110', 'Pui Shak (Malabar Spinach bundles)', 1, '0.00', NOW()),
(11, '89400000000111', 'Mistikumra (Sweet Pumpkin)', 1, '0.00', NOW()),
(12, '89400000000112', 'Kacha Morich (Green Chillies)', 1, '0.00', NOW()),
(13, '89400000000113', 'Deshi Lebu (Elachi/Seedless Lemons)', 1, '0.00', NOW()),
(14, '89400000000114', 'Shosha (Local Cucumbers)', 1, '0.00', NOW()),
(15, '89400000000115', 'Papaya (Kacha Pepe)', 1, '0.00', NOW()),
(16, '89400000000201', 'Kaptan Broiler Chicken (Whole)', 2, '0.00', NOW()),
(17, '89400000000202', 'Deshi Murgi (Local Free-Range Chicken)', 2, '0.00', NOW()),
(18, '89400000000203', 'Pakistani Sonali Chicken', 2, '0.00', NOW()),
(19, '89400000000204', 'Beef Shingara Cut (With Bone)', 2, '0.00', NOW()),
(20, '89400000000205', 'Beef Boneless (Solid Meat)', 2, '0.00', NOW()),
(21, '89400000000206', 'Beef Keema (Minced Beef)', 2, '0.00', NOW()),
(22, '89400000000207', 'Beef Nehari Bones (Payaya)', 2, '0.00', NOW()),
(23, '89400000000208', 'Khashir Mangsho (Mutton Standard Cut)', 2, '0.00', NOW()),
(24, '89400000000209', 'Khashir REB Cut (Mutton Ribs)', 2, '0.00', NOW()),
(25, '89400000000210', 'Kazi Farms Kitchen Chicken Drumsticks', 2, '0.00', NOW()),
(26, '89400000000211', 'CP Chicken Wings', 2, '0.00', NOW()),
(27, '89400000000212', 'Bengal Meat Premium Beef Ribeye', 2, '0.00', NOW()),
(28, '89400000000213', 'Bengal Meat Chicken Breast Fillet', 2, '0.00', NOW()),
(29, '89400000000214', 'Turkey Meat (Frozen Cut)', 2, '0.00', NOW()),
(30, '89400000000215', 'Duck Meat (Deshi Hash)', 2, '0.00', NOW()),
(31, '89400000000301', 'Padma llish Fish (Medium size)', 3, '0.00', NOW()),
(32, '89400000000302', 'Rui Fish (Cleaned & Cut)', 3, '0.00', NOW()),
(33, '89400000000303', 'Katla Fish (Whole)', 3, '0.00', NOW()),
(34, '89400000000304', 'Pangas Fish (Local Cultured)', 3, '0.00', NOW()),
(35, '89400000000305', 'Telapia Fish (Live/Fresh)', 3, '0.00', NOW()),
(36, '89400000000306', 'Chingri Mach (Local Tiger Prawns)', 3, '0.00', NOW()),
(37, '89400000000307', 'Gura Chingri (Small Shrimp)', 3, '0.00', NOW()),
(38, '89400000000308', 'Pabda Fish', 3, '0.00', NOW()),
(39, '89400000000309', 'Shing Fish (Live Freshwater)', 3, '0.00', NOW()),
(40, '89400000000310', 'Tengra Fish', 3, '0.00', NOW()),
(41, '89400000000311', 'Boal Fish Cut', 3, '0.00', NOW()),
(42, '89400000000312', 'Rupchanda Fish (Pomfret)', 3, '0.00', NOW()),
(43, '89400000000313', 'Loitta Fish (Bombay Duck)', 3, '0.00', NOW()),
(44, '89400000000314', 'Kacha Shutki (Dried Loitta/Churi)', 3, '0.00', NOW()),
(45, '89400000000315', 'Sea Bass (Koral Fish)', 3, '0.00', NOW()),
(46, '89400000000401', 'Aarong Dairy Liquid Whole Milk', 4, '0.00', NOW()),
(47, '89400000000402', 'Milk Vita Pasteurized Milk', 4, '0.00', NOW()),
(48, '89400000000403', 'Pran UHT Milk', 4, '0.00', NOW()),
(49, '89400000000404', 'Aarong Salted Butter', 4, '0.00', NOW()),
(50, '89400000000405', 'Milk Vita Unsalted Butter', 4, '0.00', NOW()),
(51, '89400000000406', 'Aarong Sour Curd (Tok Doi)', 4, '0.00', NOW()),
(52, '89400000000407', 'Bogurar Misti Doi (Sweet Curd)', 4, '0.00', NOW()),
(53, '89400000000408', 'Aarong Liquid Heavy Cream', 4, '0.00', NOW()),
(54, '89400000000409', 'Savar Dairies Paneer', 4, '0.00', NOW()),
(55, '89400000000410', 'Amul Cheese Slices (Imported)', 4, '0.00', NOW()),
(56, '89400000000411', 'Cow & Gate Infant Milk Powder', 4, '0.00', NOW()),
(57, '89400000000412', 'Nido Fortigrow Milk Powder', 4, '0.00', NOW()),
(58, '89400000000413', 'Dano Daily Milk Powder', 4, '0.00', NOW()),
(59, '89400000000414', 'Pran Premium Ghee (Tin)', 4, '0.00', NOW()),
(60, '89400000000415', 'Arla Apetina Feta Cheese', 4, '0.00', NOW()),
(61, '89400000000501', 'Kazi Farms Kitchen Brown Eggs (Dozen)', 5, '0.00', NOW()),
(62, '89400000000502', 'Eggo Premium White Eggs (Dozen)', 5, '0.00', NOW()),
(63, '89400000000503', 'Local Farm Fresh Duck Eggs', 5, '0.00', NOW()),
(64, '89400000000504', 'Deshi Murgir Dim (Local Chicken Eggs)', 5, '0.00', NOW()),
(65, '89400000000505', 'Organic Omega-3 Enriched Eggs', 5, '0.00', NOW()),
(66, '89400000000506', 'Quail Eggs Pack (24 Pcs)', 5, '0.00', NOW()),
(67, '89400000000507', 'Liquid Egg Whites Carton', 5, '0.00', NOW()),
(68, '89400000000508', 'Hard Boiled Peeled Eggs (Pack)', 5, '0.00', NOW()),
(69, '89400000000509', 'Salted Duck Eggs (Nonaj Dim)', 5, '0.00', NOW()),
(70, '89400000000510', 'Century Eggs (Pidan Pack)', 5, '0.00', NOW()),
(71, '89400000000511', 'Free Range Pasture Raised Eggs', 5, '0.00', NOW()),
(72, '89400000000512', 'Low Cholesterol Smart Eggs', 5, '0.00', NOW()),
(73, '89400000000513', 'Kazi Farms Brown Eggs (6 Pcs Pack)', 5, '0.00', NOW()),
(74, '89400000000514', 'Local Haor Duck Eggs', 5, '0.00', NOW()),
(75, '89400000000515', 'Premium Heritage Breed Eggs', 5, '0.00', NOW()),
(76, '89400000000601', 'Golden Harvest Chicken Nuggets', 6, '0.00', NOW()),
(77, '89400000000602', 'Kazi Farms Kitchen Chicken Sausage (Plain)', 6, '0.00', NOW()),
(78, '89400000000603', 'Kazi Farms Kitchen Cheese Onion Sausage', 6, '0.00', NOW()),
(79, '89400000000604', 'CP Chicken Ball', 6, '0.00', NOW()),
(80, '89400000000605', 'CP Frankfurters', 6, '0.00', NOW()),
(81, '89400000000606', 'Shahi Chicken Samosa (Frozen Pack)', 6, '0.00', NOW()),
(82, '89400000000607', 'Shahi Beef Shingara (Frozen Pack)', 6, '0.00', NOW()),
(83, '89400000000608', 'Golden Harvest French Fries', 6, '0.00', NOW()),
(84, '89400000000609', 'Bengal Meat Chicken Bologna Slices', 6, '0.00', NOW()),
(85, '89400000000610', 'Bengal Meat Beef Salami Slices', 6, '0.00', NOW()),
(86, '89400000000611', 'Smoked Turkey Breast Slices (Imported)', 6, '0.00', NOW()),
(87, '89400000000612', 'Pruma Chicken Mortadella', 6, '0.00', NOW()),
(88, '89400000000613', 'Deli-Style Potato Salad Tub', 6, '0.00', NOW()),
(89, '89400000000614', 'Coleslaw Salad Mix Tub', 6, '0.00', NOW()),
(90, '89400000000615', 'Bengal Meat Beef Pastrami', 6, '0.00', NOW()),
(91, '89400000000701', 'Miniket Rice (Premium Polish)', 7, '0.00', NOW()),
(92, '89400000000702', 'Nazirshail Rice', 7, '0.00', NOW()),
(93, '89400000000703', 'BRRI Dhan 28 Rice', 7, '0.00', NOW()),
(94, '89400000000704', 'Pran Chinigura Polao Rice', 7, '0.00', NOW()),
(95, '89400000000705', 'Fortune Basmati Rice', 7, '0.00', NOW()),
(96, '89400000000706', 'Teer Atta (Whole Wheat Flour)', 7, '0.00', NOW()),
(97, '89400000000707', 'Ifad Maida (All Purpose Flour)', 7, '0.00', NOW()),
(98, '89400000000708', 'Pran Suji (Semolina)', 7, '0.00', NOW()),
(99, '89400000000709', 'Deshi Masoor Dal (Small Red Lentils)', 7, '0.00', NOW()),
(100, '89400000000710', 'Canadian Masoor Dal (Large)', 7, '0.00', NOW()),
(101, '89400000000711', 'Chana Dal (Split Chickpeas)', 7, '0.00', NOW()),
(102, '89400000000712', 'Moong Dal (Roasted Mung Beans)', 7, '0.00', NOW()),
(103, '89400000000713', 'Mashkolai Dal (Black Gram)', 7, '0.00', NOW()),
(104, '89400000000714', 'Deshi Chola (Whole Chickpeas)', 7, '0.00', NOW()),
(105, '89400000000715', 'Dheki Chata Lal Chal (Brown Rice)', 7, '0.00', NOW()),
(106, '89400000000801', 'Maggi 2-Minute Masala Noodles', 8, '0.00', NOW()),
(107, '89400000000802', 'Cocola Instant Masala Noodles', 8, '0.00', NOW()),
(108, '89400000000803', 'Mama Instant Noodles (Shrimp Flavor)', 8, '0.00', NOW()),
(109, '89400000000804', 'Ifad Egg Noodles', 8, '0.00', NOW()),
(110, '89400000000805', 'Kolson Spaghetti', 8, '0.00', NOW()),
(111, '89400000000806', 'Kolson Elbow Macaroni', 8, '0.00', NOW()),
(112, '89400000000807', 'Chopstick Instant Noodles', 8, '0.00', NOW()),
(113, '89400000000808', 'Pran Stick Noodles', 8, '0.00', NOW()),
(114, '89400000000809', 'Doodles Instant Noodles', 8, '0.00', NOW()),
(115, '89400000000810', 'Master Pasta Penne Rigate', 8, '0.00', NOW()),
(116, '89400000000811', 'Master Pasta Fusilli', 8, '0.00', NOW()),
(117, '89400000000812', 'Wai Wai Quick Noodles', 8, '0.00', NOW()),
(118, '89400000000813', 'Samyang Buldak Spicy Ramen (Imported)', 8, '0.00', NOW()),
(119, '89400000000814', 'Thai Rice Vermicelli (Mee Hoon)', 8, '0.00', NOW()),
(120, '89400000000815', 'Ifad Lasagna Sheets', 8, '0.00', NOW());
(121, '89400000000901', 'Rupchanda Soyabean Oil', 9, '0.00', NOW()),
(122, '89400000000902', 'Teer Soyabean Oil', 9, '0.00', NOW()),
(123, '89400000000903', 'Fresh Soyabean Oil', 9, '0.00', NOW()),
(124, '89400000000904', 'Radhuni Pure Mustard Oil (Ghani)', 9, '0.00', NOW()),
(125, '89400000000905', 'Pran Pure Mustard Oil', 9, '0.00', NOW()),
(126, '89400000000906', 'Fortune Rice Bran Oil', 9, '0.00', NOW()),
(127, '89400000000907', 'Radhuni Premium Cow Ghee', 9, '0.00', NOW()),
(128, '89400000000908', 'Aarong Pure Cow Ghee', 9, '0.00', NOW()),
(129, '89400000000909', 'Parachute Skin Pure Coconut Oil (Cooking Grade)', 9, '0.00', NOW()),
(130, '89400000000910', 'Olitalia Extra Virgin Olive Oil', 9, '0.00', NOW()),
(131, '89400000000911', 'Borgis Pure Olive Oil', 9, '0.00', NOW()),
(132, '89400000000912', 'Dalda Vegetable Ghee', 9, '0.00', NOW()),
(133, '89400000000913', 'Bashundhara Soyabean Oil', 9, '0.00', NOW()),
(134, '89400000000914', 'King''s Sunflower Oil', 9, '0.00', NOW()),
(135, '89400000000915', 'Noor Sunflower Oil', 9, '0.00', NOW()),
(136, '89400000001001', 'Radhuni Turmeric Powder (Holud)', 10, '0.00', NOW()),
(137, '89400000001002', 'Radhuni Chilli Powder (Morich)', 10, '0.00', NOW()),
(138, '89400000001003', 'Radhuni Coriander Powder (Dhonia)', 10, '0.00', NOW()),
(139, '89400000001004', 'Radhuni Cumin Powder (Gura Jeera)', 10, '0.00', NOW()),
(140, '89400000001005', 'Radhuni Garam Masala Powder', 10, '0.00', NOW()),
(141, '89400000001006', 'Radhuni Meat Curry Powder', 10, '0.00', NOW()),
(142, '89400000001007', 'Radhuni Biryani Masala Pack', 10, '0.00', NOW()),
(143, '89400000001008', 'Pran Pure Iodized Table Salt', 10, '0.00', NOW()),
(144, '89400000001009', 'Molla Salt Super Refined', 10, '0.00', NOW()),
(145, '89400000001010', 'Fresh Refined White Sugar', 10, '0.00', NOW()),
(146, '89400000001011', 'Deshi Lal Chini (Brown Cane Sugar)', 10, '0.00', NOW()),
(147, '89400000001012', 'Maggi Tastemaker (Shahi Masala)', 10, '0.00', NOW()),
(148, '89400000001013', 'Pran Tomato Ketchup', 10, '0.00', NOW()),
(149, '89400000001014', 'Ahmed Chilli Sauce', 10, '0.00', NOW()),
(150, '89400000001015', 'Ahmed Kasundi (Mustard Sauce)', 10, '0.00', NOW()),
(151, '89400000001101', 'Pran Sweet Corn Can', 11, '0.00', NOW()),
(152, '89400000001102', 'Ahmed Mushroom Pieces & Stems Can', 11, '0.00', NOW()),
(153, '89400000001103', 'Maldivian Tuna Chunks in Vegetable Oil', 11, '0.00', NOW()),
(154, '89400000001104', 'Heinz Baked Beans in Tomato Sauce', 11, '0.00', NOW()),
(155, '89400000001105', 'Pran Coconut Milk Can', 11, '0.00', NOW()),
(156, '89400000001106', 'Ahmed Pineapple Slices in Syrup', 11, '0.00', NOW()),
(157, '89400000001107', 'Ahmed Mixed Fruit Jam', 11, '0.00', NOW()),
(158, '89400000001108', 'Pran Mango Pickle (Achar)', 11, '0.00', NOW()),
(159, '89400000001109', 'Pran Garlic Pickle', 11, '0.00', NOW()),
(160, '89400000001110', 'Radhuni Naga Chilli Pickle', 11, '0.00', NOW()),
(161, '89400000001111', 'Golden Harvest Tomato Paste Can', 11, '0.00', NOW()),
(162, '89400000001112', 'American Green Green Peas Can', 11, '0.00', NOW()),
(163, '89400000001113', 'King Oscar Sardines in Olive Oil', 11, '0.00', NOW()),
(164, '89400000001114', 'Pran Chickpeas in Brine Can', 11, '0.00', NOW()),
(165, '89400000001115', 'Ahmed Sliced Jalapeños Jar', 11, '0.00', NOW()),
(166, '89400000001201', 'Foster Clark''s Baking Powder', 12, '0.00', NOW()),
(167, '89400000001202', 'Foster Clark''s Baking Soda', 12, '0.00', NOW()),
(168, '89400000001203', 'Blue Band Margarine Tub', 12, '0.00', NOW()),
(169, '89400000001204', 'Saf-Instant Dry Yeast Packet', 12, '0.00', NOW()),
(170, '89400000001205', 'Foster Clark''s Vanilla Essence', 12, '0.00', NOW()),
(171, '89400000001206', 'Pran Corn Flower', 12, '0.00', NOW()),
(172, '89400000001207', 'Hershey''s Cocoa Powder Unsweetened', 12, '0.00', NOW()),
(173, '89400000001208', 'Morde Dark Chocolate Chips', 12, '0.00', NOW()),
(174, '89400000001209', 'Alshifa Pure Natural Honey', 12, '0.00', NOW()),
(175, '89400000001210', 'Ahmed Maple Flavoured Syrup', 12, '0.00', NOW()),
(176, '89400000001211', 'Fresh Icing Sugar', 12, '0.00', NOW()),
(177, '89400000001212', 'Eagle Brand Sweetened Condensed Milk', 12, '0.00', NOW()),
(178, '89400000001213', 'Pran Evaporated Milk Can', 12, '0.00', NOW()),
(179, '89400000001214', 'Coco Island Shredded Coconut', 12, '0.00', NOW()),
(180, '89400000001215', 'Weikfield China Grass (Agar Agar)', 12, '0.00', NOW()),
(181, '89400000001301', 'All Time Sliced White Bread', 13, '0.00', NOW()),
(182, '89400000001302', 'All Time Milk Bread', 13, '0.00', NOW()),
(183, '89400000001303', 'All Time Bun (Sweet)', 13, '0.00', NOW()),
(184, '89400000001304', 'Cooper''s Plain Croissant', 13, '0.00', NOW()),
(185, '89400000001305', 'Wonder White Sliced Bread', 13, '0.00', NOW()),
(186, '89400000001306', 'All Time Butter Bun', 13, '0.00', NOW()),
(187, '89400000001307', 'Cooper''s Garlic Bread Loaf', 13, '0.00', NOW()),
(188, '89400000001308', 'Shahi Tortilla Roti Pack', 13, '0.00', NOW()),
(189, '89400000001309', 'Tasty Treat Chocolate Muffin', 13, '0.00', NOW()),
(190, '89400000001310', 'Tasty Treat Glazed Donut', 13, '0.00', NOW()),
(191, '89400000001311', 'Well Food Plain Cake Loaf', 13, '0.00', NOW()),
(192, '89400000001312', 'Well Food Dry Cake Biscuits', 13, '0.00', NOW()),
(193, '89400000001313', 'Well Food Bakarkhani Pack', 13, '0.00', NOW()),
(194, '89400000001314', 'Local Bakery Toast Biscuits', 13, '0.00', NOW()),
(195, '89400000001315', 'Shahi Pita Bread Pack', 13, '0.00', NOW()),
(196, '89400000001401', 'Bombay Sweets Potato Crackers', 14, '0.00', NOW()),
(197, '89400000001402', 'Kurkure Masala Munch', 14, '0.00', NOW()),
(198, '89400000001403', 'Sunchips BBQ Flavor', 14, '0.00', NOW()),
(199, '89400000001404', 'Pran Potata Spicy Biscuit', 14, '0.00', NOW()),
(200, '89400000001405', 'Bombay Sweets Chanachur (Spicy Mix)', 14, '0.00', NOW()),
(201, '89400000001406', 'Pran Jhal Chanachur', 14, '0.00', NOW()),
(202, '89400000001407', 'Radhuni Fried Dal (Fried Mung Dal)', 14, '0.00', NOW()),
(203, '89400000001408', 'Meridian Potato Chips', 14, '0.00', NOW()),
(204, '89400000001409', 'Pringles Sour Cream & Onion', 14, '0.00', NOW()),
(205, '89400000001410', 'Lay''s Classic Salted Chips', 14, '0.00', NOW()),
(206, '89400000001411', 'Doritos Nacho Cheese', 14, '0.00', NOW()),
(207, '89400000001412', 'Tong Garden Roasted Salted Peanuts', 14, '0.00', NOW()),
(208, '89400000001413', 'Tong Garden Cashew Nuts', 14, '0.00', NOW()),
(209, '89400000001414', 'Diamond Saltine Crackers', 14, '0.00', NOW()),
(210, '89400000001415', 'Lexis Vegetable Crackers', 14, '0.00', NOW()),
(211, '89400000001501', 'Cadbury Dairy Milk Chocolate Bar', 15, '0.00', NOW()),
(212, '89400000001502', 'Nestlé KitKat 2-Finger Bar', 15, '0.00', NOW()),
(213, '89400000001503', 'Center Fresh Chewing Gum', 15, '0.00', NOW()),
(214, '89400000001504', 'Alpenliebe Rich Milk Candy', 15, '0.00', NOW()),
(215, '89400000001505', 'Pulse Candy (Kacha Aam flavor)', 15, '0.00', NOW()),
(216, '89400000001506', 'Safari Chocolate Bar', 15, '0.00', NOW()),
(217, '89400000001507', 'Mimmi Chocolate (Local Retro)', 15, '0.00', NOW()),
(218, '89400000001508', 'Mentos Mint Dragees', 15, '0.00', NOW()),
(219, '89400000001509', 'Snickers Peanut Chocolate Bar', 15, '0.00', NOW()),
(220, '89400000001510', 'Fox''s Crystal Clear Candy Tin', 15, '0.00', NOW()),
(221, '89400000001511', 'Olympic Milk Marie Biscuits', 15, '0.00', NOW()),
(222, '89400000001512', 'Olympic Energy Biscuits', 15, '0.00', NOW()),
(223, '89400000001513', 'Kiswan Chocolate Wafer', 15, '0.00', NOW()),
(224, '89400000001514', 'Perfetti Van Melle Chupa Chups', 15, '0.00', NOW()),
(225, '89400000001515', 'Haribo Goldbears Gummy Candy', 15, '0.00', NOW()),
(226, '89400000001601', 'Ispahani Mirzapore Best Leaf Tea', 16, '0.00', NOW()),
(227, '89400000001602', 'Taaza Black Tea Bags', 16, '0.00', NOW()),
(228, '89400000001603', 'Kazi & Kazi Organic Green Tea', 16, '0.00', NOW()),
(229, '89400000001604', 'Nescafé Classic Instant Coffee Jar', 16, '0.00', NOW()),
(230, '89400000001605', 'Nescafé 3-in-1 Coffee Mix Sachets', 16, '0.00', NOW()),
(231, '89400000001606', 'MacCoffee 3-in-1 Original', 16, '0.00', NOW()),
(232, '89400000001607', 'Horlicks Health Drink (Classic Malt)', 16, '0.00', NOW()),
(233, '89400000001608', 'Maltova Health Drink', 16, '0.00', NOW()),
(234, '89400000001609', 'Milo Chocolate Malt Powder Tint', 16, '0.00', NOW()),
(235, '89400000001610', 'Ovaltine Nutri-10 Powder', 16, '0.00', NOW()),
(236, '89400000001611', 'Cadbury Hot Chocolate Drinking Powder', 16, '0.00', NOW()),
(237, '89400000001612', 'Twinings Earl Grey Tea Bags', 16, '0.00', NOW()),
(238, '89400000001613', 'Lipton Yellow Label Tea Bags', 16, '0.00', NOW()),
(239, '89400000001614', 'Ispahani Blender''s Choice Premium Tea', 16, '0.00', NOW()),
(240, '89400000001615', 'Nescafé Gold Premium Coffee', 16, '0.00', NOW()),
(241, '89400000001701', 'Mum Mineral Water (Standard Bottle)', 17, '0.00', NOW()),
(242, '89400000001702', 'Kinley Water (Coca-Cola Bangladesh)', 17, '0.00', NOW()),
(243, '89400000001703', 'Pran Frooto Mango Juice', 17, '0.00', NOW()),
(244, '89400000001704', 'Shezan Mango Juice', 17, '0.00', NOW()),
(245, '89400000001705', 'Coca-Cola Original Taste Can', 17, '0.00', NOW()),
(246, '89400000001706', 'Pepsi Cola Can', 17, '0.00', NOW()),
(247, '89400000001707', '7Up Lemon Lime Soda', 17, '0.00', NOW()),
(248, '89400000001708', 'Sprite Clear Soda', 17, '0.00', NOW()),
(249, '89400000001709', 'Mojo Cola (Akij)', 17, '0.00', NOW()),
(250, '89400000001710', 'Speed Energy Drink', 17, '0.00', NOW()),
(251, '89400000001711', 'Pran Up Lemon Soda', 17, '0.00', NOW()),
(252, '89400000001712', 'Tiger Energy Drink', 17, '0.00', NOW()),
(253, '89400000001713', 'Clemon Lemon Lime Drink', 17, '0.00', NOW()),
(254, '89400000001714', 'Pran Lassi Tetra Pack', 17, '0.00', NOW()),
(255, '89400000001715', 'Uro Cola', 17, '0.00', NOW()),
(256, '89400000001801', 'Golden Harvest Beef Burger Patties', 18, '0.00', NOW()),
(257, '89400000001802', 'Kazi Farms Kitchen Chicken Shami Kebab', 18, '0.00', NOW()),
(258, '89400000001803', 'Kazi Farms Kitchen Paratha (Family Pack)', 18, '0.00', NOW()),
(259, '89400000001804', 'Ifad Multi-Grain Paratha Frozen', 18, '0.00', NOW()),
(260, '89400000001805', 'Golden Harvest Chicken Spring Roll', 18, '0.00', NOW()),
(261, '89400000001806', 'Shahi Dal Puri Frozen Pack', 18, '0.00', NOW()),
(262, '89400000001807', 'CP Chicken Popcorn Frozen', 18, '0.00', NOW()),
(263, '89400000001808', 'Golden Harvest French Fries (1kg Bag)', 18, '0.00', NOW()),
(264, '89400000001809', 'Kazi Farms Kitchen Chicken Meatballs', 18, '0.00', NOW()),
(265, '89400000001810', 'Kazi Farms Kitchen Veg Singara', 18, '0.00', NOW()),
(266, '89400000001811', 'Shahi Beef Haleem Mix (Frozen Tray)', 18, '0.00', NOW()),
(267, '89400000001812', 'Golden Harvest Fish Finger', 18, '0.00', NOW()),
(268, '89400000001813', 'Lamisa Frozen Alu Puri', 18, '0.00', NOW()),
(269, '89400000001814', 'Lamisa Frozen Chitoi Pitha', 18, '0.00', NOW()),
(270, '89400000001815', 'Kazi Farms Kitchen Chicken Moglai Pitha', 18, '0.00', NOW()),
(271, '89400000001901', 'Igloo Vanilla Ice Cream Gold Tub', 19, '0.00', NOW()),
(272, '89400000001902', 'Polar Chocolate Ice Cream Tub', 19, '0.00', NOW()),
(273, '89400000001903', 'Kwality Walls Shahi Kulfi Ice Cream', 19, '0.00', NOW()),
(274, '89400000001904', 'Igloo Macho Chocolate Bar', 19, '0.00', NOW()),
(275, '89400000001905', 'Polar Crunchy Bar', 19, '0.00', NOW()),
(276, '89400000001906', 'Savoy Mango Sorbet Tub', 19, '0.00', NOW()),
(277, '89400000001907', 'Igloo Strawberry Ice Cream Tub', 19, '0.00', NOW()),
(278, '89400000001908', 'Polar Mango Ripple Cup', 19, '0.00', NOW()),
(279, '89400000001909', 'Savoy Butter Pecan Premium Tub', 19, '0.00', NOW()),
(280, '89400000001910', 'Igloo Ripple Combo (Chocolate/Vanilla)', 19, '0.00', NOW()),
(281, '89400000001911', 'Polar Lemon Ice Lolly', 19, '0.00', NOW()),
(282, '89400000001912', 'Kwality Walls Cornetto Disc Cone', 19, '0.00', NOW()),
(283, '89400000001913', 'Igloo Chocobar Classic', 19, '0.00', NOW()),
(284, '89400000001914', 'Savoy Vanilla Sandwich Ice Cream', 19, '0.00', NOW()),
(285, '89400000001915', 'Polar Kulfi Ice Cream Stick', 19, '0.00', NOW()),
(286, '89400000002001', 'Vim Dishwashing Liquid Bottle', 20, '0.00', NOW()),
(287, '89400000002002', 'Vim Dishwashing Bar', 20, '0.00', NOW()),
(288, '89400000002003', 'Wheel Laundry Soap Bar', 20, '0.00', NOW()),
(289, '89400000002004', 'Surf Excel Quick Wash Detergent Powder', 20, '0.00', NOW()),
(290, '89400000002005', 'Rin Advanced Detergent Powder', 20, '0.00', NOW()),
(291, '89400000002006', 'Jet Detergent Powder', 20, '0.00', NOW()),
(292, '89400000002007', 'Harpic Power Plus Toilet Cleaner', 20, '0.00', NOW()),
(293, '89400000002008', 'Lysol Surface Disinfectant Liquid', 20, '0.00', NOW()),
(294, '89400000002009', 'Lizol Floor Cleaner', 20, '0.00', NOW()),
(295, '89400000002010', 'Mr. Brasso Glass Cleaner Spray', 20, '0.00', NOW()),
(296, '89400000002011', 'Savlon Antiseptic Liquid (ACI)', 20, '0.00', NOW()),
(297, '89400000002012', 'Dettol Antiseptic Liquid', 20, '0.00', NOW()),
(298, '89400000002013', 'Fresh Trash Bags (Medium Black)', 20, '0.00', NOW()),
(299, '89400000002014', 'Scotch-Brite Heavy Duty Scrub Pad', 20, '0.00', NOW()),
(300, '89400000002015', 'Vim Anti-Bacterial Dishwash Gel', 20, '0.00', NOW()),
(301, '89400000002101', 'Fresh Toilet Tissue Roll (2-Ply)', 21, '0.00', NOW()),
(302, '89400000002102', 'Bashundhara Toilet Tissue Eco Roll', 21, '0.00', NOW()),
(303, '89400000002103', 'Fresh Kitchen Towel Roll', 21, '0.00', NOW()),
(304, '89400000002104', 'Bashundhara Paper Napkins (Pocket Pack)', 21, '0.00', NOW()),
(305, '89400000002105', 'Fay Facial Tissue Flat Box', 21, '0.00', NOW()),
(306, '89400000002106', 'Fresh Facial Tissue Cube Box', 21, '0.00', NOW()),
(307, '89400000002107', 'Bashundhara Paper Plates Pack', 21, '0.00', NOW()),
(308, '89400000002108', 'Fay Paper Cups Pack', 21, '0.00', NOW()),
(309, '89400000002109', 'Diamond Aluminium Foil Roll', 21, '0.00', NOW()),
(310, '89400000002110', 'Fresh Plastic Cling Wrap Roll', 21, '0.00', NOW()),
(311, '89400000002111', 'Bashundhara Baking Wax Paper', 21, '0.00', NOW()),
(312, '89400000002112', 'Soft n'' Cool Wet Wipes Pack', 21, '0.00', NOW()),
(313, '89400000002113', 'Fresh Pocket Tissue Packs', 21, '0.00', NOW()),
(314, '89400000002114', 'Bashundhara Coffee Filters Pack', 21, '0.00', NOW()),
(315, '89400000002115', 'Fay Dinner Napkins Box', 21, '0.00', NOW()),
(316, '89400000002201', 'Lux Velvet Touch Body Soap', 22, '0.00', NOW()),
(317, '89400000002202', 'Lifebuoy Total 10 Antibacterial Soap', 22, '0.00', NOW()),
(318, '89400000002203', 'Sunsilk Black Shine Shampoo', 22, '0.00', NOW()),
(319, '89400000002204', 'Head & Shoulders Anti-Dandruff Shampoo', 22, '0.00', NOW()),
(320, '89400000002205', 'Dove Cream Beauty Bar', 22, '0.00', NOW()),
(321, '89400000002206', 'Pears Pure & Gentle Soap', 22, '0.00', NOW()),
(322, '89400000002207', 'Meril Protective Petroleum Jelly', 22, '0.00', NOW()),
(323, '89400000002208', 'Fair & Lovely / Glow & Lovely Advanced Multi-Vitamin Cream', 22, '0.00', NOW()),
(324, '89400000002209', 'Pepsodent Cavity Protection Toothbrush', 22, '0.00', NOW()),
(325, '89400000002210', 'Close-Up Red Hot Toothpaste', 22, '0.00', NOW()),
(326, '89400000002211', 'Pepsodent Germicheck Toothpaste', 22, '0.00', NOW()),
(327, '89400000002212', 'Listerine Cool Mint Mouthwash', 22, '0.00', NOW()),
(328, '89400000002213', 'Parachute Advanced Jasmine Hair Oil', 22, '0.00', NOW()),
(329, '89400000002214', 'Gillette Vector Razor Handle + Cartridge', 22, '0.00', NOW()),
(330, '89400000002215', 'Parachute Coconut Hair Oil', 22, '0.00', NOW()),
(331, '89400000002301', 'Pampers Active Baby Diapers (Size 3)', 23, '0.00', NOW()),
(332, '89400000002302', 'MamyPoko Pants Standard Diapers (Medium)', 23, '0.00', NOW()),
(333, '89400000002303', 'Huggies Wonder Pants Diapers', 23, '0.00', NOW()),
(334, '89400000002304', 'Meril Baby Wipes (Sensitive Unscented)', 23, '0.00', NOW()),
(335, '89400000002305', 'Bashundhara Baby Wipes', 23, '0.00', NOW()),
(336, '89400000002306', 'Johnson''s Baby Shampoo (No More Tears)', 23, '0.00', NOW()),
(337, '89400000002307', 'Kodomo Baby Hair & Body Wash', 23, '0.00', NOW()),
(338, '89400000002308', 'Johnson''s Baby Powder (Original)', 23, '0.00', NOW()),
(339, '89400000002309', 'Meril Baby Lotion', 23, '0.00', NOW()),
(340, '89400000002310', 'Johnson''s Baby Oil', 23, '0.00', NOW()),
(341, '89400000002311', 'Cerelac Rice & Milk Stage 1 (Nestlé)', 23, '0.00', NOW()),
(342, '89400000002312', 'Lactogen 1 Infant Formula (Nestlé)', 23, '0.00', NOW()),
(343, '89400000002313', 'Biomil 1 Infant Milk Formula', 23, '0.00', NOW()),
(344, '89400000002314', 'Puregen Baby Diaper Rash Ointment', 23, '0.00', NOW()),
(345, '89400000002315', 'Heinz Baby Food Puree (Apple/Banana Pouch)', 23, '0.00', NOW());


-- Vegetables (IDs 1–15)
UPDATE products SET selling_price = 40 WHERE id IN (1,5);
UPDATE products SET selling_price = 50 WHERE id IN (2,6,7,8,14,15);
UPDATE products SET selling_price = 60 WHERE id IN (9,10,11);
UPDATE products SET selling_price = 70 WHERE id IN (4,12,13);
UPDATE products SET selling_price = 120 WHERE id = 3;

-- Meat & Poultry (IDs 16–30)
UPDATE products SET selling_price = 250 WHERE id = 16;
UPDATE products SET selling_price = 450 WHERE id = 17;
UPDATE products SET selling_price = 400 WHERE id = 18;
UPDATE products SET selling_price = 650 WHERE id = 19;
UPDATE products SET selling_price = 850 WHERE id = 20;
UPDATE products SET selling_price = 600 WHERE id IN (21,22);
UPDATE products SET selling_price = 900 WHERE id IN (23,24);
UPDATE products SET selling_price = 300 WHERE id IN (25,26,28);
UPDATE products SET selling_price = 700 WHERE id = 27;
UPDATE products SET selling_price = 500 WHERE id IN (29,30);

-- Fish (IDs 31–45)
UPDATE products SET selling_price = 1200 WHERE id = 31; -- Hilsa
UPDATE products SET selling_price = 300 WHERE id IN (32,33,34,35);
UPDATE products SET selling_price = 800 WHERE id = 36; -- Tiger prawns
UPDATE products SET selling_price = 200 WHERE id = 37;
UPDATE products SET selling_price = 250 WHERE id IN (38,39,40);
UPDATE products SET selling_price = 400 WHERE id IN (41,43);
UPDATE products SET selling_price = 600 WHERE id = 42; -- Pomfret
UPDATE products SET selling_price = 500 WHERE id = 45;

-- Dairy (IDs 46–60)
UPDATE products SET selling_price = 80 WHERE id IN (46,47,48);
UPDATE products SET selling_price = 250 WHERE id IN (49,50,59);
UPDATE products SET selling_price = 100 WHERE id IN (51,52,53,54);
UPDATE products SET selling_price = 300 WHERE id IN (55,56,57,58,60);

-- Eggs (IDs 61–75)
UPDATE products SET selling_price = 120 WHERE id = 61;
UPDATE products SET selling_price = 110 WHERE id = 64;
UPDATE products SET selling_price = 100 WHERE id IN (62,63,65);
UPDATE products SET selling_price = 150 WHERE id IN (66,67,68,69,70,71,72,73,74,75);

-- Rice & Lentils (IDs 91–105)
UPDATE products SET selling_price = 75 WHERE id = 91;
UPDATE products SET selling_price = 120 WHERE id = 94;
UPDATE products SET selling_price = 90 WHERE id = 99;
UPDATE products SET selling_price = 85 WHERE id = 101;
UPDATE products SET selling_price = 80 WHERE id IN (92,93,95,96,97,98,100,102,103,104,105);

-- Oils (IDs 121–135)
UPDATE products SET selling_price = 180 WHERE id IN (121,122,123,133);
UPDATE products SET selling_price = 220 WHERE id IN (124,125);
UPDATE products SET selling_price = 250 WHERE id = 126;
UPDATE products SET selling_price = 300 WHERE id IN (127,128);
UPDATE products SET selling_price = 150 WHERE id IN (129,134,135);
UPDATE products SET selling_price = 550 WHERE id = 130;
UPDATE products SET selling_price = 500 WHERE id = 131;
UPDATE products SET selling_price = 200 WHERE id = 132;

-- Spices (IDs 136–150)
UPDATE products SET selling_price = 90 WHERE id = 136;
UPDATE products SET selling_price = 120 WHERE id = 137;
UPDATE products SET selling_price = 150 WHERE id = 140;
UPDATE products SET selling_price = 100 WHERE id IN (138,139,141,142,143,144,145,146,147,148,149,150);

-- Snacks (chips, biscuits, crackers)
UPDATE products SET selling_price = 40 WHERE id IN (196,197,198,199,200,201,202,203);
UPDATE products SET selling_price = 60 WHERE id IN (204,205,206);
UPDATE products SET selling_price = 100 WHERE id IN (207,208,209,210);

-- Chocolates & Candy
UPDATE products SET selling_price = 80 WHERE id IN (211,212,213,214,215,216,217,218,219);
UPDATE products SET selling_price = 120 WHERE id IN (220,221,222,223,224,225);

-- Water & Juices
UPDATE products SET selling_price = 20 WHERE id IN (241,242);
UPDATE products SET selling_price = 40 WHERE id IN (243,244,245,246,247,248,249,251,253,254,255);

-- Energy Drinks
UPDATE products SET selling_price = 60 WHERE id IN (250,252);

-- Frozen Foods
UPDATE products SET selling_price = 220 WHERE id IN (256,257,258,259,260,261,262,263,264,265,266,267,268,269,270);

-- Ice Cream
UPDATE products SET selling_price = 90 WHERE id IN (286,287,288,289,290,291,292,293,294,295,296,297,298,299,300);

-- Household Cleaning
UPDATE products SET selling_price = 90 WHERE id IN (286,287,288,289,290,291,292,293,294,295,296,297,298,299,300);

-- Paper Products
UPDATE products SET selling_price = 70 WHERE id IN (301,302,303,304,305,306,307,308,309,310,311,312,313,314,315);

-- Personal Care
UPDATE products SET selling_price = 120 WHERE id IN (316,317,318,319,320,321,322,323,324,325,326,327,328,329,330);

-- Baby Products
UPDATE products SET selling_price = 200 WHERE id IN (331,332,333,334,335,336,337,338,339,340,341,342,343,344,345);



-- Suppliers
INSERT INTO `suppliers`(`id`, `name`, `contact_person`, `phone`, `email`, `address`, `payment_terms`, `status`, `buying_total`, `created_at`)
VALUES
(1, 'Rahman Trading', 'Rafiqul Miah', '01958731530', 'rafiqul.miah8@example.com', '251, Kazi Nazrul Islam Avenue, Khulna', 'Net 7', 'active', 1068196.90, '2026-07-10 05:27:00'),
(2, 'Ahmed Trading', 'Shahid Sarker', '01639560506', 'shahid.sarker89@example.com', '371, Main Road, Chattogram', 'Cash', 'active', 1179042.08, '2026-03-31 04:53:00'),
(3, 'Alam Agency', 'Karim Miah', '01630658865', 'karim.miah17@example.com', '457, Industrial Area, Noakhali', 'Net 30', 'active', 787388.21, '2026-02-14 22:36:00'),
(4, 'Ahmed Agency', 'Imran Khan', '01883406405', 'imran.khan19@example.com', '330, Station Road, Dhaka', 'Net 15', 'active', 1421266.62, '2026-03-18 13:51:00'),
(5, 'Bhuiyan Enterprise', 'Jamal Molla', '01576601020', 'jamal.molla84@example.com', '381, Link Road, Rangpur', 'Net 60', 'active', 923262.59, '2026-07-28 21:30:00'),
(6, 'Sarker Store', 'Tanvir Alam', '01650427626', 'tanvir.alam53@example.com', '934, New Market, Chattogram', 'Net 7', 'inactive', 1027135.99, '2026-03-07 00:45:00'),
(7, 'Khan Enterprise', 'Kamal Rahman', '01446681705', 'kamal.rahman49@example.com', '117, Station Road, Chattogram', 'Net 7', 'active', 2423178.44, '2026-05-27 15:06:00'),
(8, 'Rahman Corporation', 'Rubel Ahmed', '01417920410', 'rubel.ahmed66@example.com', '676, New Market, Gazipur', 'Net 15', 'active', 1003575.73, '2026-03-22 22:35:00'),
(9, 'Khan International', 'Masud Haque', '01731248167', 'masud.haque93@example.com', '649, Industrial Area, Dhaka', 'Net 30', 'active', 1461518.80, '2026-03-08 10:21:00'),
(10, 'Uddin Suppliers', 'Rony Bhuiyan', '01349230702', 'rony.bhuiyan16@example.com', '962, Kazi Nazrul Islam Avenue, Gazipur', 'Net 45', 'active', 1190348.28, '2026-08-07 19:14:00'),
(11, 'Islam Distributors', 'Rahim Miah', '01633098260', 'rahim.miah99@example.com', '631, Link Road, Khulna', 'Net 7', 'active', 184215.33, '2026-04-28 08:54:00'),
(12, 'Chowdhury Industries', 'Tanvir Bhuiyan', '01988204287', 'tanvir.bhuiyan38@example.com', '612, Port Road, Noakhali', 'Net 45', 'active', 1288109.50, '2026-04-27 08:47:00'),
(13, 'Rahman International', 'Hasan Chowdhury', '01577441403', 'hasan.chowdhury20@example.com', '760, Main Road, Rangpur', 'Net 45', 'active', 738870.51, '2026-08-13 07:30:00'),
(14, 'Rahman Distributors', 'Shahid Miah', '01339625119', 'shahid.miah34@example.com', '179, College Road, Sylhet', 'Net 45', 'active', 1392544.89, '2026-01-19 20:38:00'),
(15, 'Rahman Suppliers', 'Rafiqul Khan', '01650085400', 'rafiqul.khan61@example.com', '22, New Market, Gazipur', 'Net 7', 'active', 1144982.97, '2026-03-30 17:17:00'),
(16, 'Uddin Enterprise', 'Imran Molla', '01447214902', 'imran.molla52@example.com', '489, Link Road, Barishal', 'Net 30', 'active', 486965.07, '2026-07-06 05:52:00'),
(17, 'Miah Agency', 'Shahid Uddin', '01470926407', 'shahid.uddin7@example.com', '827, Port Road, Dhaka', 'Net 60', 'active', 940661.97, '2026-02-13 20:34:00'),
(18, 'Hossain Store', 'Sakib Khan', '01863834008', 'sakib.khan54@example.com', '923, Station Road, Sylhet', 'Net 7', 'active', 856017.09, '2026-07-19 04:30:00'),
(19, 'Hossain Enterprise', 'Hossain Hossain', '01563458763', 'hossain.hossain67@example.com', '8, Main Road, Rangpur', 'Net 30', 'active', 2092183.87, '2026-07-12 08:55:00'),
(20, 'Kabir Industries', 'Mahmud Ahmed', '01682201641', 'mahmud.ahmed79@example.com', '294, Station Road, Noakhali', 'Net 15', 'active', 495937.53, '2026-03-04 15:26:00'),
(21, 'Kabir Trading', 'Sabbir Bhuiyan', '01952410711', 'sabbir.bhuiyan47@example.com', '860, Station Road, Sylhet', 'Cash', 'active', 1231264.40, '2026-06-11 17:18:00'),
(22, 'Haque Enterprise', 'Sakib Khan', '01910560287', 'sakib.khan92@example.com', '482, Station Road, Dhaka', 'Cash', 'active', 2198135.73, '2026-05-28 10:05:00'),
(23, 'Kabir Industries', 'Jamal Hossain', '01514918084', 'jamal.hossain25@example.com', '463, New Market, Rajshahi', 'Cash', 'active', 2139447.10, '2026-07-15 05:20:00'),
(24, 'Talukder Industries', 'Tanvir Haque', '01856662197', 'tanvir.haque93@example.com', '160, New Market, Mymensingh', 'Cash', 'active', 1119349.50, '2026-05-13 21:24:00'),
(25, 'Khan Store', 'Rubel Uddin', '01865923832', 'rubel.uddin69@example.com', '228, Kazi Nazrul Islam Avenue, Cumilla', 'Net 30', 'active', 215014.83, '2026-04-13 16:23:00'),
(26, 'Hossain Trading', 'Nayeem Hossain', '01565976860', 'nayeem.hossain36@example.com', '702, Link Road, Cumilla', 'Net 60', 'active', 1578272.25, '2026-06-11 08:11:00'),
(27, 'Talukder Store', 'Hossain Talukder', '01594849672', 'hossain.talukder81@example.com', '957, New Market, Gazipur', 'Net 15', 'active', 2121658.31, '2026-04-16 19:29:00'),
(28, 'Alam International', 'Karim Hossain', '01929087880', 'karim.hossain44@example.com', '208, Kazi Nazrul Islam Avenue, Gazipur', 'Net 45', 'active', 37802.66, '2026-05-28 03:50:00'),
(29, 'Bhuiyan Suppliers', 'Fahim Uddin', '01431003208', 'fahim.uddin95@example.com', '689, New Market, Narayanganj', 'Net 60', 'inactive', 719766.41, '2026-08-04 05:02:00'),
(30, 'Hossain International', 'Rony Talukder', '01412387766', 'rony.talukder2@example.com', '806, College Road, Khulna', 'Net 7', 'active', 297165.52, '2026-05-30 09:14:00'),
(31, 'Islam Trading', 'Sohel Hossain', '01484605248', 'sohel.hossain70@example.com', '623, Market Road, Rangpur', 'Net 45', 'active', 1879595.21, '2026-05-20 01:44:00'),
(32, 'Islam Suppliers', 'Karim Sarker', '01454139168', 'karim.sarker52@example.com', '551, Port Road, Rajshahi', 'Net 7', 'active', 913671.38, '2026-06-24 13:45:00'),
(33, 'Hossain Industries', 'Kamal Miah', '01582475499', 'kamal.miah88@example.com', '402, New Market, Barishal', 'Net 30', 'active', 1345934.30, '2026-07-08 15:19:00'),
(34, 'Talukder Store', 'Rahim Alam', '01342688995', 'rahim.alam81@example.com', '662, Kazi Nazrul Islam Avenue, Gazipur', 'Net 7', 'active', 1794337.65, '2026-07-03 17:17:00'),
(35, 'Haque Distributors', 'Imran Rahman', '01680661621', 'imran.rahman48@example.com', '591, College Road, Rangpur', 'Net 7', 'active', 1303344.21, '2026-04-12 05:48:00'),
(36, 'Haque Corporation', 'Hasan Bhuiyan', '01478163551', 'hasan.bhuiyan65@example.com', '705, College Road, Barishal', 'Net 45', 'active', 799464.05, '2026-07-21 20:21:00'),
(37, 'Sarker Distributors', 'Kamal Hossain', '01491910614', 'kamal.hossain83@example.com', '413, Main Road, Sylhet', 'Cash', 'active', 1291874.74, '2026-03-29 00:09:00'),
(38, 'Khan International', 'Sabbir Bhuiyan', '01395890472', 'sabbir.bhuiyan76@example.com', '732, New Market, Khulna', 'Net 30', 'active', 1162744.37, '2026-07-20 12:03:00'),
(39, 'Hossain Trading', 'Kamal Rahman', '01363805912', 'kamal.rahman44@example.com', '693, Link Road, Rajshahi', 'Net 30', 'active', 922402.37, '2026-05-13 03:18:00'),
(40, 'Uddin Mart', 'Shahid Chowdhury', '01982545746', 'shahid.chowdhury68@example.com', '580, Port Road, Khulna', 'Net 60', 'active', 767278.62, '2026-06-10 22:02:00'),
(41, 'Talukder Enterprise', 'Rahim Sarker', '01967117390', 'rahim.sarker33@example.com', '286, Industrial Area, Cumilla', 'Net 60', 'active', 429743.42, '2026-05-28 05:51:00'),
(42, 'Molla Store', 'Karim Sarker', '01912098291', 'karim.sarker14@example.com', '917, Main Road, Barishal', 'Net 15', 'active', 212159.22, '2026-01-19 20:12:00'),
(43, 'Molla Mart', 'Hossain Alam', '01999561982', 'hossain.alam90@example.com', '62, Industrial Area, Narayanganj', 'Net 15', 'active', 721631.57, '2026-01-11 17:35:00'),
(44, 'Kabir Corporation', 'Fahim Kabir', '01875451984', 'fahim.kabir98@example.com', '423, Industrial Area, Dhaka', 'Cash', 'active', 1871367.28, '2026-04-24 03:53:00'),
(45, 'Islam Mart', 'Fahim Kabir', '01761691499', 'fahim.kabir14@example.com', '901, New Market, Cumilla', 'Net 45', 'active', 1950681.74, '2026-01-27 16:11:00'),
(46, 'Talukder Distributors', 'Fahim Chowdhury', '01668816777', 'fahim.chowdhury53@example.com', '709, Station Road, Barishal', 'Net 30', 'active', 791912.67, '2026-01-05 18:17:00'),
(47, 'Uddin International', 'Masud Khan', '01478129934', 'masud.khan90@example.com', '931, Market Road, Mymensingh', 'Net 30', 'active', 2372280.95, '2026-06-11 15:59:00'),
(48, 'Miah Mart', 'Mahmud Miah', '01325669206', 'mahmud.miah67@example.com', '225, Main Road, Noakhali', 'Net 45', 'active', 1458191.56, '2026-01-24 12:50:00'),
(49, 'Khan Corporation', 'Mahmud Sarker', '01671432970', 'mahmud.sarker84@example.com', '387, Link Road, Dhaka', 'Net 15', 'inactive', 1037066.41, '2026-01-25 10:46:00'),
(50, 'Bhuiyan Mart', 'Rubel Ahmed', '01955176181', 'rubel.ahmed36@example.com', '92, New Market, Narayanganj', 'Net 7', 'active', 389680.40, '2026-07-25 10:33:00'),
(51, 'Chowdhury Industries', 'Sabbir Chowdhury', '01862862921', 'sabbir.chowdhury93@example.com', '158, College Road, Noakhali', 'Cash', 'active', 49823.86, '2026-08-04 19:51:00'),
(52, 'Rahman Agency', 'Jamal Alam', '01946313851', 'jamal.alam36@example.com', '393, Market Road, Rangpur', 'Net 45', 'active', 1066268.59, '2026-01-15 02:56:00'),
(53, 'Ahmed Corporation', 'Masud Hossain', '01918905803', 'masud.hossain91@example.com', '923, Main Road, Sylhet', 'Net 7', 'active', 1648407.78, '2026-07-21 00:29:00'),
(54, 'Hossain Agency', 'Tanvir Bhuiyan', '01790597973', 'tanvir.bhuiyan55@example.com', '424, College Road, Sylhet', 'Cash', 'active', 295226.78, '2026-03-30 07:56:00'),
(55, 'Molla Corporation', 'Mahmud Talukder', '01931312741', 'mahmud.talukder82@example.com', '866, Link Road, Narayanganj', 'Net 15', 'active', 1505570.00, '2026-03-29 08:23:00'),
(56, 'Islam Corporation', 'Rubel Sarker', '01947042372', 'rubel.sarker59@example.com', '542, Market Road, Khulna', 'Cash', 'active', 849389.64, '2026-08-08 08:58:00'),
(57, 'Ahmed Industries', 'Nayeem Sarker', '01780997117', 'nayeem.sarker92@example.com', '842, New Market, Gazipur', 'Net 30', 'active', 762169.93, '2026-03-24 18:34:00'),
(58, 'Khan Distributors', 'Hossain Uddin', '01383018075', 'hossain.uddin58@example.com', '227, Main Road, Noakhali', 'Net 45', 'active', 1983124.57, '2026-03-26 18:11:00'),
(59, 'Talukder Corporation', 'Mahmud Ahmed', '01418788222', 'mahmud.ahmed26@example.com', '430, Market Road, Khulna', 'Net 30', 'active', 2221958.82, '2026-02-01 13:25:00'),
(60, 'Sarker Mart', 'Rubel Ahmed', '01414266786', 'rubel.ahmed36@example.com', '489, Link Road, Gazipur', 'Net 30', 'active', 2122873.86, '2026-07-12 09:18:00'),
(61, 'Talukder Distributors', 'Sakib Islam', '01379978605', 'sakib.islam79@example.com', '881, Station Road, Chattogram', 'Net 60', 'active', 1247038.59, '2026-07-13 02:07:00'),
(62, 'Bhuiyan Distributors', 'Nayeem Chowdhury', '01639801666', 'nayeem.chowdhury98@example.com', '155, New Market, Narayanganj', 'Net 30', 'active', 1435407.25, '2026-03-18 15:35:00'),
(63, 'Khan Mart', 'Nayeem Khan', '01860181618', 'nayeem.khan37@example.com', '522, Link Road, Rajshahi', 'Net 45', 'active', 2413484.37, '2026-02-27 19:44:00'),
(64, 'Miah Enterprise', 'Hasan Uddin', '01410915077', 'hasan.uddin83@example.com', '485, New Market, Sylhet', 'Net 7', 'active', 1254033.85, '2026-05-26 18:50:00'),
(65, 'Khan Mart', 'Arif Islam', '01567516518', 'arif.islam86@example.com', '179, Kazi Nazrul Islam Avenue, Dhaka', 'Net 45', 'active', 557302.13, '2026-01-29 06:49:00'),
(66, 'Islam Mart', 'Sabbir Miah', '01742406527', 'sabbir.miah1@example.com', '1, Market Road, Rajshahi', 'Net 30', 'active', 1795668.17, '2026-02-13 23:40:00'),
(67, 'Miah Distributors', 'Jamal Haque', '01532173398', 'jamal.haque29@example.com', '9, Station Road, Noakhali', 'Net 45', 'active', 1827509.57, '2026-04-07 11:02:00'),
(68, 'Haque Distributors', 'Tanvir Hossain', '01658081875', 'tanvir.hossain68@example.com', '777, Main Road, Sylhet', 'Net 7', 'active', 1782695.33, '2026-04-14 17:15:00'),
(69, 'Ahmed Industries', 'Rony Islam', '01546087424', 'rony.islam46@example.com', '743, Port Road, Rajshahi', 'Net 15', 'active', 1632965.91, '2026-05-15 17:51:00'),
(70, 'Islam Mart', 'Masud Rahman', '01341934607', 'masud.rahman56@example.com', '403, Port Road, Gazipur', 'Net 60', 'active', 2090784.61, '2026-04-11 04:05:00'),
(71, 'Haque Agency', 'Rubel Chowdhury', '01793282973', 'rubel.chowdhury4@example.com', '755, New Market, Dhaka', 'Net 15', 'active', 581958.52, '2026-03-16 00:31:00'),
(72, 'Ahmed Trading', 'Rubel Chowdhury', '01789988786', 'rubel.chowdhury75@example.com', '465, Industrial Area, Noakhali', 'Net 30', 'active', 1410405.97, '2026-07-19 12:43:00'),
(73, 'Miah Corporation', 'Fahim Chowdhury', '01842572490', 'fahim.chowdhury80@example.com', '134, Station Road, Mymensingh', 'Net 60', 'active', 466236.49, '2026-04-19 05:50:00'),
(74, 'Hossain Store', 'Sabbir Hossain', '01591304801', 'sabbir.hossain88@example.com', '586, Port Road, Chattogram', 'Net 60', 'active', 1350379.34, '2026-05-08 21:20:00'),
(75, 'Molla Suppliers', 'Rony Rahman', '01944390272', 'rony.rahman74@example.com', '731, College Road, Mymensingh', 'Net 45', 'active', 2367588.08, '2026-02-04 03:31:00'),
(76, 'Sarker Distributors', 'Shahid Bhuiyan', '01620150895', 'shahid.bhuiyan80@example.com', '201, Industrial Area, Sylhet', 'Net 15', 'active', 909087.96, '2026-07-10 14:13:00'),
(77, 'Ahmed Trading', 'Rafiqul Alam', '01455195958', 'rafiqul.alam72@example.com', '194, Link Road, Gazipur', 'Net 60', 'active', 817544.17, '2026-08-08 01:18:00'),
(78, 'Bhuiyan Store', 'Arif Islam', '01722413165', 'arif.islam49@example.com', '441, Station Road, Noakhali', 'Cash', 'active', 1875331.73, '2026-01-13 06:36:00'),
(79, 'Bhuiyan Mart', 'Fahim Haque', '01655558504', 'fahim.haque39@example.com', '69, Kazi Nazrul Islam Avenue, Chattogram', 'Net 30', 'active', 1810649.90, '2026-07-20 22:58:00'),
(80, 'Ahmed Distributors', 'Shahid Khan', '01494419377', 'shahid.khan21@example.com', '990, Station Road, Mymensingh', 'Net 30', 'active', 2014864.40, '2026-04-06 18:19:00'),
(81, 'Hossain Enterprise', 'Mahmud Bhuiyan', '01734516000', 'mahmud.bhuiyan46@example.com', '705, Main Road, Rajshahi', 'Net 60', 'active', 1369451.73, '2026-01-20 11:17:00'),
(82, 'Talukder International', 'Fahim Islam', '01858854991', 'fahim.islam76@example.com', '484, Link Road, Cumilla', 'Net 60', 'active', 1675739.14, '2026-04-29 05:18:00'),
(83, 'Hossain Trading', 'Rubel Kabir', '01985680877', 'rubel.kabir29@example.com', '397, Industrial Area, Sylhet', 'Net 7', 'active', 779173.70, '2026-01-15 06:20:00'),
(84, 'Hossain International', 'Nayeem Ahmed', '01619635776', 'nayeem.ahmed74@example.com', '334, Market Road, Sylhet', 'Net 45', 'active', 722348.59, '2026-05-31 13:07:00'),
(85, 'Uddin Distributors', 'Sabbir Sarker', '01966715949', 'sabbir.sarker14@example.com', '496, College Road, Barishal', 'Net 60', 'active', 115836.01, '2026-05-18 17:21:00'),
(86, 'Rahman Industries', 'Jamal Ahmed', '01926944622', 'jamal.ahmed74@example.com', '242, Kazi Nazrul Islam Avenue, Khulna', 'Cash', 'active', 361412.14, '2026-01-10 16:18:00'),
(87, 'Hossain Mart', 'Sakib Ahmed', '01477457100', 'sakib.ahmed76@example.com', '318, Port Road, Gazipur', 'Cash', 'active', 1136269.88, '2026-02-24 11:09:00'),
(88, 'Hossain Store', 'Nayeem Miah', '01982810998', 'nayeem.miah11@example.com', '37, Market Road, Barishal', 'Net 45', 'active', 82662.98, '2026-03-25 11:34:00'),
(89, 'Bhuiyan Distributors', 'Rony Haque', '01491035086', 'rony.haque56@example.com', '596, Main Road, Barishal', 'Net 30', 'active', 2420560.57, '2026-04-22 14:27:00'),
(90, 'Ahmed Suppliers', 'Fahim Islam', '01880473639', 'fahim.islam47@example.com', '386, Market Road, Gazipur', 'Net 60', 'inactive', 1253902.33, '2026-01-04 14:02:00'),
(91, 'Islam Enterprise', 'Kamal Alam', '01867498569', 'kamal.alam19@example.com', '46, Link Road, Mymensingh', 'Net 7', 'active', 2447366.85, '2026-03-28 17:09:00'),
(92, 'Khan Trading', 'Sabbir Chowdhury', '01656618925', 'sabbir.chowdhury4@example.com', '434, Port Road, Barishal', 'Net 15', 'inactive', 705476.40, '2026-06-25 00:49:00'),
(93, 'Khan Suppliers', 'Shahid Uddin', '01387606430', 'shahid.uddin81@example.com', '800, Link Road, Barishal', 'Net 15', 'active', 1953198.54, '2026-02-20 17:25:00'),
(94, 'Ahmed Industries', 'Rafiqul Miah', '01949372983', 'rafiqul.miah4@example.com', '401, Industrial Area, Chattogram', 'Net 60', 'inactive', 384725.34, '2026-04-20 09:00:00'),
(95, 'Alam Industries', 'Nayeem Uddin', '01853100741', 'nayeem.uddin53@example.com', '721, Market Road, Rangpur', 'Net 30', 'active', 1474685.81, '2026-04-21 03:02:00'),
(96, 'Bhuiyan Corporation', 'Sakib Talukder', '01862084675', 'sakib.talukder92@example.com', '425, Kazi Nazrul Islam Avenue, Narayanganj', 'Net 45', 'active', 2305785.42, '2026-05-08 02:54:00'),
(97, 'Miah Agency', 'Karim Ahmed', '01676138606', 'karim.ahmed92@example.com', '692, Kazi Nazrul Islam Avenue, Gazipur', 'Cash', 'active', 2298990.68, '2026-06-14 21:37:00'),
(98, 'Kabir Distributors', 'Hossain Bhuiyan', '01324465893', 'hossain.bhuiyan62@example.com', '143, Port Road, Gazipur', 'Net 15', 'active', 452397.51, '2026-05-11 13:55:00'),
(99, 'Hossain Agency', 'Rafiqul Haque', '01987823147', 'rafiqul.haque39@example.com', '487, Market Road, Khulna', 'Net 7', 'active', 1937413.97, '2026-06-24 09:12:00'),
(100, 'Rahman Corporation', 'Jamal Khan', '01779712297', 'jamal.khan76@example.com', '917, New Market, Narayanganj', 'Net 7', 'active', 473551.83, '2026-01-18 16:35:00');

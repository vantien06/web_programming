-- ===== CATEGORIES =====
INSERT INTO categories (name, description, slug) VALUES
('T-Shirts',    'Casual and everyday tees for men and women',           't-shirts'),
('Jeans',       'Denim jeans in various fits and washes',               'jeans'),
('Jackets',     'Stylish outerwear for every season',                   'jackets'),
('Dresses',     'Elegant and casual dresses for women',                 'dresses'),
('Accessories', 'Fashion accessories: bags, hats, sunglasses and more', 'accessories'),
('Sweaters',    'Cozy knitwear and hoodies for cold weather',           'sweaters'),
('Pants',       'Chinos, cargo pants, joggers and more',                'pants'),
('Shirts',      'Smart and casual shirts for men and women',            'shirts');

-- ===== PRODUCTS =====

-- T-Shirts (category_id = 1)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(1, 'Classic White Tee',        'classic-white-tee',        'Timeless white crew-neck tee made from 100% soft cotton. Breathable and comfortable for everyday wear.',                          29.99,  'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400', 120, 5),
(1, 'Black Essential Tee',      'black-essential-tee',      'Versatile black basic tee with a regular fit. Easy to style for any occasion.',                                                  24.99,  'https://images.unsplash.com/photo-1503341504253-dff4f94032fc?w=400', 95,  4),
(1, 'Striped Crew Neck',        'striped-crew-neck',        'Horizontal striped crew-neck tee inspired by classic European Breton style.',                                                    34.99,  'https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?w=400', 60,  4),
(1, 'Graphic Print Tee',        'graphic-print-tee',        'Artistic graphic print tee crafted from eco-friendly organic cotton.',                                                           27.99,  'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400', 80,  3),
(1, 'Oversized Drop Shoulder',  'oversized-drop-shoulder',  'Trendy oversized drop-shoulder tee. Streetwear-inspired unisex design.',                                                         32.99,  'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400', 70,  5);

-- Jeans (category_id = 2)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(2, 'Slim Fit Dark Wash',       'slim-fit-dark-wash',       'Dark wash slim-fit jeans with slight stretch for a flattering silhouette.',                                                       59.99,  'https://images.unsplash.com/photo-1542272604-787c3835535d?w=400', 85,  5),
(2, 'Relaxed Straight Leg',     'relaxed-straight-leg',     'Comfortable straight-leg jeans with a relaxed fit and heavyweight denim construction.',                                           54.99,  'https://images.unsplash.com/photo-1604176354204-9268737828e4?w=400', 60,  4),
(2, 'High Waist Skinny',        'high-waist-skinny',        'High-waisted skinny jeans for women with 4-way stretch for a body-hugging fit.',                                                  64.99,  'https://images.unsplash.com/photo-1541099649105-f69ad21f3246?w=400', 75,  5),
(2, 'Vintage Wash Boyfriend',   'vintage-wash-boyfriend',   'Vintage-washed boyfriend jeans with a retro 90s-inspired relaxed look.',                                                         49.99,  'https://images.unsplash.com/photo-1475178626620-a4d074967571?w=400', 40,  4),
(2, 'Ripped Denim Shorts',      'ripped-denim-shorts',      'Edgy ripped denim shorts, perfect for an active and energetic summer.',                                                          34.99,  'https://images.unsplash.com/photo-1591195853828-11db59a44f6b?w=400', 90,  3);

-- Jackets (category_id = 3)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(3, 'Classic Leather Jacket',   'classic-leather-jacket',   'Genuine leather biker jacket with silk lining. Built to last and age beautifully.',                                              189.99, 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400', 30,  5),
(3, 'Denim Trucker Jacket',     'denim-trucker-jacket',     'Classic trucker-style denim jacket with a light wash and vintage design.',                                                        79.99,  'https://images.unsplash.com/photo-1576995853123-5a10305d93c0?w=400', 50,  4),
(3, 'Wool Blend Overcoat',      'wool-blend-overcoat',      'Elegant long overcoat with 70% wool blend. Sleek silhouette for winter.',                                                       199.99, 'https://images.unsplash.com/photo-1539533018447-63fcce2678e3?w=400', 25,  5),
(3, 'Windbreaker Hooded',       'windbreaker-hooded',       'Lightweight hooded windbreaker with water-resistant finish. Packable and great for travel.',                                      69.99,  'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=400', 65,  4),
(3, 'Puffer Down Jacket',       'puffer-down-jacket',       'Ultra-light down puffer jacket with excellent warmth retention down to -10°C. Slim fit.',                                        149.99, 'https://images.unsplash.com/photo-1544923246-77307dd270b5?w=400', 35,  4);

-- Dresses (category_id = 4)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(4, 'Summer Floral Midi',       'summer-floral-midi',       'Delicate floral midi dress in lightweight chiffon fabric. Flowy and perfect for summer.',                                         45.99,  'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?w=400', 55,  5),
(4, 'Little Black Dress',       'little-black-dress',       'Elegant black cocktail dress with a V-neckline. Knee-length and versatile for any event.',                                        79.99,  'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400', 40,  5),
(4, 'Satin Wrap Dress',         'satin-wrap-dress',         'Luxurious satin wrap dress that cinches at the waist for a flattering, glamorous look.',                                          89.99,  'https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=400', 30,  4),
(4, 'Casual T-Shirt Dress',     'casual-tshirt-dress',      'Relaxed t-shirt dress in soft cotton. Comfortable and easy for weekends.',                                                        35.99,  'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=400', 70,  4),
(4, 'Boho Maxi Dress',          'boho-maxi-dress',          'Bohemian-style maxi dress with ethnic print. Ideal for beach days and festivals.',                                                55.99,  'https://images.unsplash.com/photo-1496747611176-843222e1e57c?w=400', 45,  3);

-- Accessories (category_id = 5)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(5, 'Leather Crossbody Bag',    'leather-crossbody-bag',    'Compact genuine leather crossbody bag with magnetic closure and adjustable strap.',                                                65.99,  'https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400', 50,  5),
(5, 'Canvas Tote Bag',          'canvas-tote-bag',          'Heavy-duty canvas tote with minimalist logo. Fits a 14-inch laptop.',                                                             29.99,  'https://images.unsplash.com/photo-1544816155-12df9643f363?w=400', 100, 4),
(5, 'Classic Aviator Sunglasses','classic-aviator-sunglasses','Metal-frame aviator sunglasses with UV400 lenses. Timeless Hollywood style.',                                                    39.99,  'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400', 80,  4),
(5, 'Wool Fedora Hat',          'wool-fedora-hat',          'Retro wool fedora hat with a 1940s-inspired design. Unisex, available in multiple colors.',                                       34.99,  'https://images.unsplash.com/photo-1514327605112-b887c0e61c0a?w=400', 45,  3),
(5, 'Minimalist Watch',         'minimalist-watch',         'Clean round-dial watch with Italian leather strap, Japanese movement, and 3ATM water resistance.',                                89.99,  'https://images.unsplash.com/photo-1524592094714-0f0654e20314?w=400', 35,  5);

-- Sweaters (category_id = 6)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(6, 'Cable Knit Sweater',       'cable-knit-sweater',       'Classic cable-knit sweater in soft merino wool. Warm and cozy for winter.',                                                       49.99,  'https://images.unsplash.com/photo-1576871337632-b9aef4c17ab9?w=400', 55,  5),
(6, 'Cashmere V-Neck',          'cashmere-v-neck',          'Premium cashmere V-neck sweater. Ultra-soft, lightweight, and luxurious. Multiple colors available.',                              99.99,  'https://images.unsplash.com/photo-1638643391904-9b551ba91eaa?w=400', 25,  5),
(6, 'Oversized Hoodie',         'oversized-hoodie',         'Oversized cotton fleece hoodie with drawstring hood and kangaroo pocket. Unisex.',                                                39.99,  'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=400', 90,  4),
(6, 'Turtleneck Pullover',      'turtleneck-pullover',      'Slim-fit turtleneck pullover in a soft wool-acrylic blend.',                                                                      44.99,  'https://images.unsplash.com/photo-1614975059251-992f11792571?w=400', 40,  4);

-- Pants (category_id = 7)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(7, 'Cargo Utility Pants',      'cargo-utility-pants',      'Multi-pocket cargo pants in durable ripstop fabric. Military-inspired utility style.',                                             54.99,  'https://images.unsplash.com/photo-1624378439575-d8705ad7ae80?w=400', 65,  4),
(7, 'Chino Slim Fit',           'chino-slim-fit',           'Slim-fit chino pants in soft cotton twill. Perfect for work or casual outings.',                                                   44.99,  'https://images.unsplash.com/photo-1473966968600-fa801b869a1a?w=400', 70,  5),
(7, 'Jogger Sweatpants',        'jogger-sweatpants',        'Comfortable fleece jogger sweatpants with cuffed ankles and drawstring waist. Great for sports.',                                  34.99,  'https://images.unsplash.com/photo-1552902865-b72c031ac5ea?w=400', 85,  4),
(7, 'Linen Wide Leg',           'linen-wide-leg',           'Breathable wide-leg linen pants. Perfectly cool and relaxed for summer.',                                                         42.99,  'https://images.unsplash.com/photo-1594938298603-c8148c4dae35?w=400', 50,  3);

-- Shirts (category_id = 8)
INSERT INTO products (category_id, name, slug, description, price, image_url, stock_quantity, rating) VALUES
(8, 'Oxford Button Down',       'oxford-button-down',       'Classic Oxford button-down shirt with signature basket-weave fabric. Smart casual essential.',                                     52.99,  'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=400', 60,  5),
(8, 'Linen Camp Collar',        'linen-camp-collar',        'Short-sleeve linen camp-collar shirt with a relaxed resort-style vibe.',                                                          42.99,  'https://images.unsplash.com/photo-1589310243389-96a5483213a8?w=400', 50,  4),
(8, 'Flannel Check Shirt',      'flannel-check-shirt',      'Plaid flannel shirt in soft brushed cotton. Rugged lumberjack-inspired style.',                                                   47.99,  'https://images.unsplash.com/photo-1588359348347-9bc6cbbb689e?w=400', 45,  4),
(8, 'Silk Blend Blouse',        'silk-blend-blouse',        'Elegant silk-blend blouse for women. Relaxed fit, perfect for the office.',                                                        59.99,  'https://images.unsplash.com/photo-1598554747436-c9293d6a588f?w=400', 35,  5);

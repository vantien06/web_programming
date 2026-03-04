create table users (
	id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    phone VARCHAR(15) UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
	birthday DATE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE categories (
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    slug VARCHAR(100) UNIQUE NOT NULL
);

CREATE TABLE products (
	id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    description TEXT,
    price DECIMAL(15,2) NOT NULL,
    image_url VARCHAR(255),
    stock_quantity INT DEFAULT 0,
    rating TINYINT DEFAULT 0,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FK_CategoryProduct FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE locations(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)  NOT NULL,
    address VARCHAR(255) NOT NULL,
    google_map_url TEXT NOT NULL
);

    
CREATE TABLE products_locations (
	product_id INT NOT NULL, -- FK
    location_id INT NOT NULL, -- FK
    stock_quantity INT DEFAULT 0,
    PRIMARY KEY (product_id, location_id),
    CONSTRAINT FK_ProLoc_Product FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    CONSTRAINT FK_ProLoc_Location FOREIGN KEY (location_id) REFERENCES locations(id) ON DELETE CASCADE
);


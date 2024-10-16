CREATE DATABASE IF NOT EXISTS supplements_store;
USE supplements_store;

-- Create a table named products
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255)
);

-- Insert sample data into the products table
INSERT INTO products (name, description, price, image) VALUES
('Whey Protein', 'High-quality whey protein for muscle growth', 29.99, 'whey_protein.jpg'),
('BCAA Powder', 'Branched-chain amino acids for muscle recovery', 19.99, 'bcaa_powder.jpg'),
('Creatine Monohydrate', 'Supports strength and performance', 24.99, 'creatine.jpg'),
('Omega-3 Fish Oil', 'Essential fatty acids for joint and heart health', 14.99, 'omega3.jpg'),
('Pre-Workout', 'Boosts energy and endurance for intense workouts', 34.99, 'pre_workout.jpg');
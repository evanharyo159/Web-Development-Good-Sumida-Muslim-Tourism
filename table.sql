-- Create table for itinerary data
CREATE TABLE IF NOT EXISTS ItineraryData (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    duration_hours FLOAT NOT NULL,
    price_per_person INT,
    halal_level VARCHAR(255) NOT NULL
);

-- Insert data into ItineraryData table
INSERT INTO ItineraryData (name, category, duration_hours, price_per_person, halal_level) VALUES
('Tokyo Skytree', 'Attraction', 2, 2600, 'All'),
('Sumida Aquarium', 'Attraction', 2, 2500, 'All'),
('Kokugikan', 'Attraction', 0.5, 0, 'All'),
('Tobu Museum', 'Attraction', 1, 210, 'All'),
('Mukojima Hyakkaen', 'Attraction', 1, 0, 'All'),
('Ekoin Temple', 'Attraction', 0.5, 0, 'All'),
('Tobacco & Salt Museum', 'Attraction', 1, 100, 'All'),
('Postal Museum Japan', 'Attraction', 1, 300, 'All'),
('Ushijima Shrine', 'Attraction', 0.5, 0, 'All'),
('Oyokogawa Waterfront Park', 'Attraction', 0.5, 0, 'All'),
('Sumida Hokusai Museum', 'Attraction', 1, 400, 'All'),
('Edo Tokyo Museum', 'Attraction', 2, 600, 'All'),
('Sumida River Walk', 'Attraction', 1, 0, 'All'),
('Indian Restaurant AMARA Tokyo Skytree Town', 'Restaurant', 1.5, 1550, 'Halal'),
('LAND_A', 'Restaurant', 1.5, 1500, 'Halal'),
('Sumida River Kitchen', 'Restaurant', 1.5, 1000, 'Halal'),
('Tokyo Muslim Hanten', 'Restaurant', 1.5, 900, 'Halal'),
('Ryogoku\'s chic tenement ramen Kumahachi', 'Restaurant', 1.5, 980, 'Halal'),
('Train and Bus', 'Transport', 0.75, 300, 'All'),
('Tokyo Skytree Prayer Room', 'Prayer Room', 0.5, 0, 'Except Non-Halal'),
('World Beer Museum', 'Restaurant', 1.5, 4000, 'Non-Halal'),
('KUA\'AINA Skytree store', 'Restaurant', 1.5, 1000, 'Non-Halal'),
('Skyscraper Tokyo Skytree Town Solamachi Branch', 'Restaurant', 1.5, 4000, 'Non-Halal'),
('Kokonoha Tokyo Skytree Town Solamachi store', 'Restaurant', 1.5, 1000, 'Non-Halal'),
('Salon Egg and I Kinshicho Termina store', 'Restaurant', 1.5, 2000, 'Non-Halal'),
('Tsubame Grill Kinshicho Termina 2 store', 'Restaurant', 1.5, 1000, 'Non-Halal'),
('Western restaurant Ginza Grill Cardinal', 'Restaurant', 1.5, 1000, 'Non-Halal'),
('Umaya dressing room Tokyo Solamachi store', 'Restaurant', 1.5, 2000, 'Non-Halal'),
('Western restaurant Kitchen Jiro Arcakit Kinshicho store', 'Restaurant', 1.5, 1000, 'Non-Halal');

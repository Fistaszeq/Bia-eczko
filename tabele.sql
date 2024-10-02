-- Tworzenie tabeli "Produkty Cechy"
CREATE TABLE Produkty_Cechy (
    ProduktID INT PRIMARY KEY AUTO_INCREMENT,
    Nazwa VARCHAR(100) NOT NULL,
    Opis TEXT,
    Smak VARCHAR(50),
    Typ VARCHAR(50)
);

-- Tworzenie tabeli "Produkty Ceny i Sprzedaż"
CREATE TABLE Produkty_Ceny_i_Sprzedaz (
    ProduktID INT,
    Cena DECIMAL(10, 2) NOT NULL,
    IloscSprzedana INT DEFAULT 0,
    FOREIGN KEY (ProduktID) REFERENCES Produkty_Cechy(ProduktID)
);

-- Tworzenie tabeli "Pracownicy"
CREATE TABLE Pracownicy (
    PracownikID INT PRIMARY KEY AUTO_INCREMENT,
    Imie VARCHAR(50) NOT NULL,
    Nazwisko VARCHAR(50) NOT NULL,
    Stanowisko VARCHAR(50),
    DataZatrudnienia DATE
);

-- Tworzenie tabeli "Kategorie"
CREATE TABLE Kategorie (
    KategoriaID INT PRIMARY KEY AUTO_INCREMENT,
    Nazwa VARCHAR(100) NOT NULL,
    Opis TEXT
);

-- Dodawanie relacji między produktami a kategoriami
ALTER TABLE Produkty_Cechy ADD COLUMN KategoriaID INT;
ALTER TABLE Produkty_Cechy ADD FOREIGN KEY (KategoriaID) REFERENCES Kategorie(KategoriaID);



-- Wstawianie danych do tabeli "Kategorie"
INSERT INTO Kategorie (Nazwa, Opis) VALUES
('Białko', 'Suplementy białkowe'),
('Witaminy', 'Suplementy witaminowe'),
('Odżywki', 'Odżywki dla sportowców'),
('Przekąski', 'Zdrowe przekąski'),
('Inne', 'Różne suplementy');

-- Wstawianie danych do tabeli "Produkty Cechy"
INSERT INTO Produkty_Cechy (Nazwa, Opis, Smak, Typ, KategoriaID) VALUES
('Białko KFD', 'Wysokobiałkowy suplement diety', 'Czekoladowy', 'Whey Protein', 1),
('Białko KFD Vegan', 'Białko roślinne z grochu', 'Vanilia', 'Vegan Protein', 1),
('Multiwitamina KFD', 'Kompleks witamin dla sportowców', 'Citrus', 'Witaminy', 2),
('Odżywka węglowodanowa KFD', 'Szybka energia dla sportowców', 'Malina', 'Carbo', 3),
('Baton Proteinowy KFD', 'Zdrowa przekąska białkowa', 'Czekolada orzechowa', 'Snack', 4);

-- Wstawianie danych do tabeli "Produkty Ceny i Sprzedaż"
INSERT INTO Produkty_Ceny_i_Sprzedaz (ProduktID, Cena, IloscSprzedana) VALUES
(1, 99.99, 150),
(2, 89.99, 80),
(3, 39.99, 120),
(4, 49.99, 90),
(5, 29.99, 200);

-- Wstawianie danych do tabeli "Pracownicy"
INSERT INTO Pracownicy (Imie, Nazwisko, Stanowisko, DataZatrudnienia) VALUES
('Jan', 'Kowalski', 'Sprzedawca', '2022-01-15'),
('Anna', 'Nowak', 'Kierownik', '2020-03-20'),
('Piotr', 'Zalewski', 'Magazynier', '2021-06-10'),
('Katarzyna', 'Wójcik', 'Specjalista ds. marketingu', '2019-08-05'),
('Michał', 'Szymański', 'Pracownik biurowy', '2023-05-01');
# Proiect Cărți – Mini Aplicație PHP + MySQL

O aplicație simplă care permite gestionarea unei liste de cărți: adăugare, vizualizare și urmărirea progresului de lectură. Scrisă în PHP cu stilizare CSS și conectare la o bază de date MySQL.

---

## Funcționalități

- Afișează o listă de cărți cu titlu, autor, stadiu (citită / în progres / de citit) și pagina curentă
- Permite adăugarea de cărți printr-un formular (`add_book.php`)
- Stochează datele într-o bază de date MySQL (`books_db`)
- Design simplu, stilizat cu `styles.css`

---

## Tehnologii folosite

- **PHP** – pentru partea de server
- **MySQL** – pentru stocarea datelor
- **HTML/CSS** – pentru interfața utilizator
- **XAMPP sau alt server local** – pentru rularea aplicației

---



## Configurarea bazei de date

1. Creează o bază de date numită `books_db` în MySQL (poți folosi phpMyAdmin sau MySQL Workbench).
2. Creează tabelul `books` cu următoarea structură:

```sql
CREATE TABLE books (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  author VARCHAR(255),
  status ENUM('citita', 'in progres', 'de citit') DEFAULT 'de citit',
  pagina_curenta INT DEFAULT 0
);

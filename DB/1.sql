CREATE TABLE IF NOT EXISTS users(
   id SERIAL PRIMARY KEY,
   username VARCHAR(100) UNIQUE NOT NULL,
   user_password TEXT UNIQUE NOT NULL,
   phone VARCHAR(10) UNIQUE,
   user_role INTEGER NOT NULL
);

CREATE TABLE IF NOT EXISTS posts(
   id SERIAL PRIMARY KEY,
   author INTEGER REFERENCES users (id) NOT NULL,
   title VARCHAR(100) NOT NULL,
   description TEXT NOT NULL,
   creation_date timestamp NOT NULL,
   category INTEGER
);

CREATE TABLE IF NOT EXISTS roles(
   id SERIAL PRIMARY KEY,
   description VARCHAR(10) UNIQUE NOT NULL
);

ALTER TABLE users
   ADD CONSTRAINT fk_roles FOREIGN KEY (user_role) REFERENCES roles (id);

CREATE TABLE IF NOT EXISTS comments(
   id SERIAL PRIMARY KEY,
   post INTEGER REFERENCES posts (id),
   author INTEGER REFERENCES users(id),
   comment TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS likes(
   id SERIAL PRIMARY KEY,
   post INTEGER REFERENCES posts (id),
   author INTEGER REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS categories(
   id SERIAL PRIMARY KEY,
   description VARCHAR(20) UNIQUE NOT NULL
);

ALTER TABLE posts
   ADD CONSTRAINT fk_categories FOREIGN KEY (category) REFERENCES categories (id);
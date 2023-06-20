# Bad Program

```sql
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),

    CHECK ( email LIKE '%@%' )
    INVALID_TOKEN
);
```

📚 Xulieta - SQL Validator
==========================

> **Warning**
> This library is highly experimental.

#### 📊 SQL Validator?

Yes, you read it right. This packages provides basic SQL validation for.
your code snippets Just plug it in your xulieta configuration and you
are good to go.

```shell script
composer require codelicia/xulieta-sql-validator --dev
```

Xulieta will automatically detect the validator and will configure it
for you. You can check it out on you `.xulieta.xml` file.

---

### Checking for errors

After registering the validator, no extra steps are required. Just run
xulieta as usual.

 ```shell script
 ./vendor/bin/xulieta check:erromeu <directory>
 ```

### How to use it on my docs?

Just make sure you mark you code block as `sql`, `mysql` or
`postgresql` and you are good to go If you'd like to add something
else, please open an issue or a PR.

## Author 🎩✨

- malukenho (@malukenho)
- Eher (@EHER)
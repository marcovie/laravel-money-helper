# 💰 Money Helper for Laravel

[![Tests](https://github.com/your-username/your-repo/actions/workflows/tests.yml/badge.svg)](https://github.com/your-username/your-repo/actions)

A simple Laravel package to work with monetary values stored in **cents/pence** and convert them into properly formatted display strings or float values. This package is helpful when storing money as integers in the database for precision, but needing to display or manipulate them easily.

---

## ✨ Features

-   Convert amounts in cents/pence to formatted currency strings
-   Convert to float (e.g., `1234` → `12.34`)
-   Round up to the nearest arbitrary amount
-   Optional helper functions for quick use

---

## 📦 Installation

Require the package via Composer:

```bash
composer require marcovie/laravel-money-helper
```

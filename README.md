# 💰 Money Helper for Laravel

A simple Laravel package to work with monetary values stored in **cents/pence** and convert them into properly formatted display strings or float values. This package is helpful when storing money as integers in the database for precision, but needing to display or manipulate them easily.

---

## ✨ Features

This package provides utility functions for handling money in integer format (cents/pence), with optional globally available helpers:

| Function Name                                                     | Description                                                                                             |
| ----------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `moneyToDisplayFormat(int $amount, string $currency = 'GBP')`     | Converts integer amount into a formatted currency string using locale (e.g., `123456` → `"£1,234.56"`). |
| `moneyToFloatAmount(float $value)`                                | Converts integer amount to float (e.g., `123456` → `1234.56`).                                          |
| `moneyToRoundedUpByNearestNumber(int $amount, int $nearest = 10)` | Rounds up an amount to the nearest number (e.g., `123456` → `123460`).                                  |

-   Convert amounts in cents/pence to formatted currency strings
-   Convert to float (e.g., `1234` → `12.34`)
-   Round up to the nearest arbitrary amount
-   Optional helper functions for quick use

> These helper functions can be toggled on/off in the `money.php` config file under the `helpers` array.

---

## 📦 Installation

Require the package via Composer:

```bash
composer require marcovie/laravel-money-helper
```

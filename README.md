# Hello DevOps

A tiny WordPress plugin used to validate a **CI/CD pipeline** with GitHub Actions and rsync deployments.

It adds:

- A shortcode: `[karim_devops_hello]`
- An admin notice for administrators

Display:

> **Hello WordPress world, this is Karim DevOps**

---

## Plugin Details

- **Name:** Hello DevOps  
- **Slug (directory):** `hello-devops`  
- **Main file:** `hello-devops.php`  
- **Version:** `1.0.0`  

---

## Features

- ✅ Simple “hello world” style plugin
- ✅ Shortcode to display a message on any page/post
- ✅ Admin dashboard notice (visible to admins only)
- ✅ Designed to work out-of-the-box with the provided `deploy.yml` workflow
- ✅ Suitable as a base for more advanced DevOps tests

---

## Usage

### 1. Activate the Plugin

1. Copy the plugin folder `Hello DevOps` to:

   ```text
   wp-content/plugins/Hello-DevOps

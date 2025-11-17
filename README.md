# Hello DevOps

A tiny WordPress plugin used to validate a **CI/CD pipeline** with GitHub Actions and rsync deployments.

It adds:

- A shortcode: `[karim_devops_hello]`
- An admin notice for administrators

Display:

> **Hello WordPress world, this is Karim DevOps**

---

## Repository Structure

Hello DevOps/
├─ hello-devOps.php             # Main plugin file
├─ readme.txt                   # readme
└─ .github/
   └─ workflows/
      └─ deploy.yml             # `CI/CD pipeline` GitHub Actions workflow for `zero-downtime` deployment

---

## Zero-Downtime

In a traditional “FTP upload” or simple rsync directly into wp-content/plugins/bloodhound:

- Files can change while PHP is executing.

- You might have some files updated and others not yet.

- During that window, the plugin code can be incomplete → fatal errors / broken site.

With this zero-downtime approach:

1. A new release directory is created (e.g. bloodhound-20251117_113500-ghi9abc).

2. All plugin files are rsynced into this new folder.

3. Only when the folder is fully ready, the workflow runs:

 ```bash
 ln -sfn "$NEW_RELEASE_PATH" "${CURRENT_LINK}"
 ```

 - ln -sfn updates the symlink atomically.

 - At the filesystem level, the pointer changes almost instantly.

 - If a PHP request starts before the switch, it uses the old code.

 - If it starts after, it uses the new code.

 - No “in-between state”.

This is the core of zero-downtime: all code changes appear at once, and the live path is never half-updated.

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

# Langis Theme Development

This theme uses **Vite** for a modern development workflow.

## Getting Started

1.  **Install Dependencies** (if you haven't yet)
    ```bash
    npm install
    ```

2.  **Start Development Server**
    ```bash
    npm run dev
    ```
    - This starts a local server at `http://localhost:3000`.
    - It watches for changes in `src/scss` and `src/js`.
    - CSS changes are reflected instantly (Hot Module Replacement) without reloading the page.
    - **Note**: You still view your WordPress site at `http://langis.test` (or your local WP URL), but the assets are served from Vite.

3.  **Build for Production**
    ```bash
    npm run build
    ```
    - Generates optimized files in the `dist/` folder.
    - Use this before deploying or committing if you manage `dist` in git.

## Directory Structure

- `src/main.js`: The main JavaScript entry point. SCSS is imported here.
- `src/scss/`: Your SCSS files.
- `functions.php`: Contains logic to load assets from Vite (dev) or dist (prod).
- `vite.config.js`: Configuration for the build process.

## Git Workflow

- Pull the repo.
- Run `npm install`.
- Run `npm run dev` to work.

## Technical Notes (Crucial for proper operation)

1.  **Environment Detection**:
    - In `functions.php`, we force `IS_VITE_DEVELOPMENT` to `true` to ensure MAMP/Local environments correctly load Vite assets.
    - Change this logic if you move to a production environment where you need automatic detection.

2.  **ES Modules**:
    - Vite serves assets as native ES Modules.
    - We added a `script_loader_tag` filter in `functions.php` to automatically add `type="module"` to the script tags. Without this, you will see "Cannot use import statement outside a module" errors.


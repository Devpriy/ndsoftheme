# NDSoftheme AI Development Guide

## Project
NDSoftheme is a custom WordPress Block Theme used for development, testing, and AI/MCP research.

## Architecture

- `theme.json` — global design settings, styles, typography, colors, spacing, and block configuration.
- `templates/` — WordPress block templates.
- `parts/` — reusable template parts such as header and footer.
- `patterns/` — reusable block patterns for homepage sections and other content.
- `functions.php` — theme functionality and setup.
- `style.css` — theme stylesheet.
- `assets/` — theme assets.

## Development Rules

1. Inspect the existing code before making changes.
2. Prefer reusable WordPress Block Patterns over duplicating markup.
3. Keep `theme.json` as the source of global design tokens and styles.
4. Follow WordPress Block Theme standards.
5. Do not unnecessarily change working code.
6. Do not modify production/Live files directly.
7. Test changes on the Local WordPress installation first.
8. Preserve existing navigation, templates, patterns, and functionality unless the task requires changing them.
9. Keep code clean, readable, maintainable, and minimal.
10. Before finishing, check for errors and unintended changes.

## Git Workflow

Development flow:

Local → Git diff → Git commit → GitHub → Hostinger deployment

Before committing:

- Review `git status`
- Review `git diff`
- Confirm only intended files changed
- Test the Local website

Never commit blindly.

## AI Development Workflow

When making a change:

1. Understand the request.
2. Inspect relevant files.
3. Explain the intended change when useful.
4. Make the smallest appropriate change.
5. Check for syntax or structural errors.
6. Test locally.
7. Review the Git diff.
8. Commit only intentional changes.

## WordPress Safety

Do not:

- Modify WordPress core files.
- Replace existing working theme architecture without reason.
- Hardcode content that should be dynamic.
- Deploy untested changes directly to Live.

Prefer:

- WordPress APIs
- Block markup
- Block Patterns
- `theme.json`
- Template Parts
- Reusable components
- Maintainable code

## Current Environment

Local WordPress is used for development and testing.

Live deployment is handled through GitHub and Hostinger Git deployment.

The GitHub repository uses the `main` branch.
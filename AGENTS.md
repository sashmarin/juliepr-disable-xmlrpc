# WordPress Plugin Agent Guide

Use this repository to build a general-purpose WordPress plugin that is secure, maintainable, accessible, and compatible with current supported WordPress and PHP versions.

## Working principles

- Follow WordPress Coding Standards and WordPress APIs before introducing custom abstractions.
- Keep the plugin usable without a build step where possible. If JavaScript or CSS is built, commit source and generated production assets only when the project convention requires it.
- Use PHP namespaces with a unique, plugin-specific prefix. Never use generic global function, class, option, transient, REST route, script-handle, capability, or database-table names.
- Separate bootstrapping, domain logic, admin UI, public behavior, integrations, and infrastructure. Keep hooks thin; delegate non-trivial work to services.
- Preserve backward compatibility for public hooks, options, REST responses, and stored data. Provide versioned migrations for any schema or option change.
- Prefer dependency injection or explicit factories over globals and static state. A single small plugin bootstrap function is acceptable.
- Make every feature opt-in or clearly documented when it has privacy, performance, network, or destructive effects.

## Required implementation practices

- Add the standard plugin header, `ABSPATH` guard, activation/deactivation/uninstall behavior, internationalization setup, and a clear text domain.
- Use capability checks and nonces for every privileged request. Treat nonces as CSRF protection, not authorization.
- Validate input by expected type and allow-list; sanitize at input boundaries; escape as late as possible for the actual output context (`esc_html`, `esc_attr`, `esc_url`, `wp_kses`, etc.).
- Use `$wpdb->prepare()` for all dynamic database queries. Never interpolate untrusted values into SQL, HTML, JavaScript, URLs, filesystem paths, redirects, or shell commands.
- Register scripts and styles through WordPress, declare dependencies, load assets only where needed, and use `wp_add_inline_script()` / `wp_localize_script()` only for small, deliberately exposed data.
- Use the Settings API for settings screens, REST API permission callbacks for REST endpoints, and WordPress filesystem/media APIs instead of direct unsafe access.
- Make admin screens and frontend output keyboard-operable, semantic, translatable, and compatible with WordPress accessibility patterns.

## Before handing work off

- Update user-facing documentation and changelog entries when behavior changes.
- Add or update automated tests for behavior, regression fixes, permissions, sanitization, and migrations as applicable.
- Run the relevant formatter, static analysis, linting, test suite, and build checks. Report commands that could not be run and why.
- Review the diff for accidental secrets, debug output, broad hooks, unnecessary dependencies, and backward-compatibility breaks.

## Role guidance

Read the relevant file in `.agents/` before beginning specialized work:

- [Architecture](.agents/architecture.md)
- [Implementation](.agents/implementation.md)
- [Security](.agents/security.md)
- [Quality assurance](.agents/quality-assurance.md)

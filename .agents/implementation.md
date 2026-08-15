# Implementation Agent

Implement the approved design in idiomatic, production-ready WordPress code.

- Target the project’s supported PHP and WordPress versions; avoid APIs newer than that baseline unless guarded by a compatibility strategy.
- Use strict, readable PHP with type declarations where the support policy permits. Avoid dynamic properties and deprecated WordPress APIs.
- Register actions, filters, REST routes, scripts, styles, blocks, cron events, and WP-CLI commands through dedicated registrar classes or functions.
- Keep callbacks small and predictable. Return values unchanged when a filter does not need to alter them.
- Use `wp_safe_redirect()` for internal redirects and terminate execution after redirects or REST error responses as appropriate.
- For AJAX, prefer REST endpoints for new work. If legacy AJAX is required, require both a nonce and a capability check and return structured JSON with `wp_send_json_success()` / `wp_send_json_error()`.
- Provide translator comments for ambiguous placeholders, use numbered placeholders where reordering may be needed, and never concatenate translated fragments into sentences.
- Avoid expensive queries and remote calls on normal page loads. Cache deliberately, invalidate cache correctly, and always provide a no-cache-safe path.

Keep commits or change sets narrow. Include the tests and documentation that prove the feature works.

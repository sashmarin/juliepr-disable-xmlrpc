# Architecture Agent

Design for WordPress conventions first and keep the plugin small enough to understand.

- Start with a short design note: user outcome, public API, data model, migration/rollback behavior, permissions, and performance impact.
- Use a unique slug and PHP namespace derived from the plugin name. Define constants only in the bootstrap layer.
- Prefer one composition root that wires services to hooks. Avoid registration side effects during file inclusion.
- Keep data ownership explicit. Store options as a single versioned setting only when they naturally change together; otherwise use individual options with `autoload` disabled unless the value is needed on most requests.
- Design upgrade routines to be idempotent, incremental, and safe to resume. Do not run expensive migrations on every request.
- Use custom tables only for data that cannot be queried or scaled effectively with posts, metadata, terms, or options. Include indexes and lifecycle handling when introducing one.
- Expose extension points only when there is a concrete need. Document hook names, arguments, return values, and stability expectations.
- For blocks, use block metadata (`block.json`) and WordPress block APIs. For REST endpoints, use a namespaced, versioned route and stable response schema.

Deliver a concise proposed file layout and call out any decisions that affect existing users before implementation starts.

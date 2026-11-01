<p align="center"><a href="https://www.localzet.com" target="_blank">
  <img src="https://static.zorin.space/media/logos/LocalzetGroup.png" width="400">
</a></p>

<p align="center">
  <a href="https://packagist.org/packages/triangle/ws">
  <img src="https://img.shields.io/packagist/dt/triangle/ws?label=%D0%A1%D0%BA%D0%B0%D1%87%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F" alt="Скачивания">
</a>
  <a href="https://github.com/Triangle-org/WS">
  <img src="https://img.shields.io/github/commit-activity/t/Triangle-org/WS?label=%D0%9A%D0%BE%D0%BC%D0%BC%D0%B8%D1%82%D1%8B" alt="Коммиты">
</a>
  <a href="https://packagist.org/packages/triangle/ws">
  <img src="https://img.shields.io/packagist/v/triangle/ws?label=%D0%92%D0%B5%D1%80%D1%81%D0%B8%D1%8F" alt="Версия">
</a>
  <a href="https://packagist.org/packages/triangle/ws">
  <img src="https://img.shields.io/packagist/dependency-v/triangle/ws/php?label=PHP" alt="Версия PHP">
</a>
  <a href="https://github.com/Triangle-org/WS">
  <img src="https://img.shields.io/github/license/Triangle-org/WS?label=%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F" alt="Лицензия">
</a>
</p>

# Triangle WS

Experimental WebSocket-first application template built on Triangle Engine and Localzet Server. Its current server configuration uses one process and exposes the WS engine's route callback API. See the [compatibility snapshot](https://docs.localzet.com/compatibility) and the main documentation for known limits.

`sendToAll()` and path-scoped `sendToGroup()` operate within the current process. They do not provide shared state or cross-process broadcast. Evaluate this track against a Web application with WebSocket endpoints before adopting it.

# Identity Generator
A minimal identity generator (including UUID)

Version 4 UUID 
```php
$uuidGenerator = new UuidGenerator;
$uuid = $uuidGenerator->generateId();
```

Timestamp-based UUID
```php
$uuidGenerator = new CombUuidGenerator;
$uuid = $uuidGenerator->generateId();
```

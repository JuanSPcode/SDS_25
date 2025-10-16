# SDS 25


##  Comportamiento del Sistema de Tracking de Visitas

### ¿Cómo funciona?

El sistema registra **UNA SOLA VISITA POR SESIÓN DEL NAVEGADOR**:

-  **Primera vez que entras**: Se registra 1 visita
-  **Navegas entre páginas** (inicio → lunes → contacto): NO se registran más visitas
-  **Cierras el navegador**: La sesión termina
-  **Vuelves a abrir el navegador**: Se registra una NUEVA visita

### Tipos de visitantes

#### 1. **Visitante Anónimo**
- Se genera un `visitor_id` único en la sesión
- Se registra en `tbl_visitas` sin asociar a usuario
- Cuenta para estadísticas de "visitantes únicos"

#### 2. **Usuario Registrado**
- Al llenar el formulario en "Contacto"
- Se crea entrada en `tbl_usuario`
- Todas sus visitas futuras se asocian a su nombre
- Contador de visitas se incrementa con cada sesión

## 🗄️ Estructura de Base de Datos

### Tabla: `tbl_usuario`
```sql
- id_usuario (PK)
- visitor_id (identificador único de sesión)
- nombre (único)
- f_registro (fecha de primer registro)
- visitas (contador automático)
```

### Tabla: `tbl_visitas`
```sql
- id_visita (PK)
- id_usuario (FK, puede ser NULL si es anónimo)
- visitor_id (identificador de sesión)
- fecha (timestamp automático)
```

## 📈 Estadísticas que se recopilan

1. **Total de visitas**: Todas las sesiones registradas
2. **Visitantes únicos**: Cantidad de `visitor_id` diferentes
3. **Usuarios registrados**: Personas que llenaron el formulario
4. **Visitas hoy**: Sesiones del día actual
5. **Visitas esta semana**: Sesiones de lunes a domingo

## 🔒 Privacidad

-  NO se almacenan IPs ni datos personales sensibles
-  El `visitor_id` es anónimo (hash MD5 único)
-  Solo se guarda el nombre si el usuario lo proporciona voluntariamente
-  Los datos se borran al cerrar el navegador (sesión)

##  Cómo probarlo

1. **Visita la página**: `http://localhost/public/`
2. **Navega entre páginas**: Verifica que solo se cuente 1 visita
3. **Registra tu nombre**: Ve a "Contacto" y llena el formulario
4. **Ver estadísticas**: Accede a `/estadisticas`
5. **Cierra el navegador**: Espera 5 segundos
6. **Vuelve a entrar**: Ahora se contará como una nueva visita

##  Archivos importantes

| Archivo                      | Función                               |
| ---------------------------- | ------------------------------------- |
| `lib/Database.php`           | Crea BD y tablas automáticamente      |
| `app/models/Visita.php`      | Lógica de negocio del tracking        |
| `app/init_tracking.php`      | Sistema automático (1 vez por sesión) |
| `app/views/contacto.php`     | Formulario de registro                |
| `app/views/estadisticas.php` | Dashboard de métricas                 |


## 📊 Ejemplo de flujo

```
Usuario A → Abre navegador
         → Entra a inicio (✅ Visita #1)
         → Va a "Lunes" (❌ No cuenta)
         → Va a "Contacto" (❌ No cuenta)
         → Registra nombre "Juan"
         → Navega más (❌ No cuenta)
         → Cierra navegador
         
Usuario A → Vuelve mañana
         → Entra a inicio (✅ Visita #2)
         → Contador de Juan: 2 visitas
```

##  Ventajas

-  Métricas reales y útiles
-  No infla artificialmente las visitas
-  Fácil de entender para el usuario
-  Compatible con privacidad
-  Estadísticas precisas

---

**Desarrollado para**: Semana de Sistemas 2025  
**Por**: Juan Sandoval  
**Curso**: Técnicas de Programación para Internet

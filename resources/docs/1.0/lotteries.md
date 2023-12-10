# Loterías

---

- [Lista de Loterías](#section-1)

<a name="section-1"></a>
## Recurso: `/api/lotteries`

**Descripción:**
Este endpoint devuelve la lista de loterías disponibles en la API, junto con sus detalles asociados.

**Método HTTP:** `GET`

**Ejemplo de Respuesta Exitosa:**
```json
{
    "status": "success",
    "data": [
        {
            "name": "ANTIOQUEÑITA MAÑANA",
            "slug": "antioquenita-manana"
        },
        {
            "name": "ANTIOQUEÑITA TARDE",
            "slug": "antioquenita-tarde"
        },
        // Otras loterías...
    ]
}
```

**Campos:**
- `name` (string): El nombre de la lotería.
- `slug` (string): El identificador único de la lotería, utilizado para realizar consultas específicas.

**Códigos de Estado:**
- `200 OK`: La solicitud fue exitosa, y se devuelve la lista de loterías.
- `404 Not Found`: No se encontraron loterías.

**Uso:**
Realiza una solicitud GET a este endpoint para obtener la lista completa de loterías disponibles. Utiliza el `slug` en consultas posteriores para acceder a información específica de cada lotería.



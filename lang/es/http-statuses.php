<?php

declare(strict_types=1);

return [
    '0'            => [
        'message' => 'Se ha producido un error desconocido. Por favor, ponte en contacto con el administrador del sistema.',
        'title'   => 'Error Desconocido',
    ],
    '100'          => [
        'message' => 'Debes continuar con la solicitud o ignorarla si ya está completa.',
        'title'   => 'Continuar',
    ],
    '101'          => [
        'message' => 'El servidor acepta el cambio de protocolo propuesto.',
        'title'   => 'Protocolos de conmutación',
    ],
    '102'          => [
        'message' => 'El servidor ha recibido la solicitud y todavía la está procesando.',
        'title'   => 'Procesando',
    ],
    '200'          => [
        'message' => 'La solicitud fue exitosa.',
        'title'   => 'OK',
    ],
    '201'          => [
        'message' => 'La solicitud fue exitosa y como resultado se creó un nuevo recurso.',
        'title'   => 'Creada',
    ],
    '202'          => [
        'message' => 'Se ha recibido la solicitud pero aún no se ha dado respuesta a ella.',
        'title'   => 'Aceptada',
    ],
    '203'          => [
        'message' => 'La solicitud se completó con éxito, pero su contenido no se obtuvo de la fuente solicitada originalmente, sino que se recopiló de una copia local o de un tercero.',
        'title'   => 'Información no autorizada',
    ],
    '204'          => [
        'message' => 'La solicitud se completó con éxito pero su respuesta no contiene contenido.',
        'title'   => 'Sin contenido',
    ],
    '205'          => [
        'message' => 'La solicitud se completó correctamente, pero su respuesta no tiene contenido y el agente de usuario aún debe inicializar la página desde la que se realizó la solicitud.',
        'title'   => 'Restablecer contenido',
    ],
    '206'          => [
        'message' => 'La solicitud servirá parcialmente el contenido solicitado.',
        'title'   => 'Contenido parcial',
    ],
    '207'          => [
        'message' => 'Se transmite información sobre múltiples recursos en situaciones en las que podrían ser apropiados múltiples códigos de estado (mensaje XML).',
        'title'   => 'Multi-Estado',
    ],
    '208'          => [
        'message' => 'El listado de artículos DAV ya ha sido notificado previamente, por lo que no volverán a aparecer en el listado.',
        'title'   => 'Ya notificado',
    ],
    '226'          => [
        'message' => 'El servidor ha cumplido una solicitud del recurso y la respuesta es una representación del resultado de una o más manipulaciones de instancia aplicadas a la instancia actual.',
        'title'   => 'IM usado',
    ],
    '300'          => [
        'message' => 'Esta solicitud tiene más de una respuesta posible. El agente de usuario o el usuario deben elegir una de ellas.',
        'title'   => 'Múltiples opciones',
    ],
    '301'          => [
        'message' => 'La URI del recurso solicitado se ha cambiado de forma permanente.',
        'title'   => 'Movido permanentemente',
    ],
    '302'          => [
        'message' => 'El recurso URI solicitado ha sido cambiado temporalmente.',
        'title'   => 'Encontrado',
    ],
    '303'          => [
        'message' => 'Dirige al cliente a un nuevo recurso solicitado en otra dirección.',
        'title'   => 'Ver otros',
    ],
    '304'          => [
        'message' => 'El recurso no ha sido modificado. Puedes seguir usando la misma versión almacenada en caché.',
        'title'   => 'No modificado',
    ],
    '305'          => [
        'message' => 'Se debe acceder a la respuesta solicitada desde un proxy.',
        'title'   => 'Usa proxy',
    ],
    '307'          => [
        'message' => 'El recurso ahora se encuentra temporalmente en otra URI.',
        'title'   => 'Redirección temporal',
    ],
    '308'          => [
        'message' => 'El recurso ahora está ubicado permanentemente en otra URI.',
        'title'   => 'Redirección permanente',
    ],
    '400'          => [
        'message' => 'El servidor no puede o no quiere procesar la solicitud debido a un error.',
        'title'   => 'Solicitud incorrecta',
    ],
    '401'          => [
        'message' => 'No tienes credenciales de autenticación válidas.',
        'title'   => 'No autorizado',
    ],
    '402'          => [
        'message' => 'Se requiere pago.',
        'title'   => 'Pago Requerido',
    ],
    '403'          => [
        'message' => 'No se pudo encontrar la página solicitada. Por favor, verifica la dirección y vuelve a intentarlo.',
        'title'   => 'Prohibido',
    ],
    '404'          => [
        'message' => 'Es posible que la página que estás buscando haya sido eliminada, renombrada o no esté disponible temporalmente.',
        'title'   => 'Página no encontrada',
    ],
    '405'          => [
        'message' => 'Esta operación no está permitida.',
        'title'   => 'Método no permitido',
    ],
    '406'          => [
        'message' => 'La información solicitada no puede ser aceptada.',
        'title'   => 'Inaceptable',
    ],
    '407'          => [
        'message' => 'Se requiere autenticación por parte del servidor Proxy.',
        'title'   => 'Se requiere autenticación proxy',
    ],
    '408'          => [
        'message' => 'El tiempo de espera se agotó porque no se recibió una solicitud dentro del tiempo asignado.',
        'title'   => 'Tiempo de espera de solicitud',
    ],
    '409'          => [
        'message' => 'La solicitud no se puede cumplir porque hay un conflicto con el recurso.',
        'title'   => 'Conflicto',
    ],
    '410'          => [
        'message' => 'El contenido solicitado se ha eliminado permanentemente del servidor y no se restaurará.',
        'title'   => 'Desaparecido',
    ],
    '411'          => [
        'message' => 'El contenido del campo de encabezado no tiene la longitud requerida.',
        'title'   => 'Longitud requerida',
    ],
    '412'          => [
        'message' => 'El servidor no cumple las condiciones solicitadas.',
        'title'   => 'La condición previa falló',
    ],
    '413'          => [
        'message' => 'La solicitud es mayor que los límites definidos por el servidor y el servidor se niega a procesarla.',
        'title'   => 'Carga útil demasiado grande',
    ],
    '414'          => [
        'message' => 'El URI (Identificador uniforme de recursos) solicitado es demasiado largo para que el servidor lo procese.',
        'title'   => 'URI demasiado larga',
    ],
    '415'          => [
        'message' => 'La solicitud utiliza un formato de medios que el servidor no admite.',
        'title'   => 'Tipo de medio no compatible',
    ],
    '416'          => [
        'message' => 'No se puede satisfacer la solicitud porque se trata de una parte de un recurso que el servidor no puede devolver.',
        'title'   => 'Rango no satisfactorio',
    ],
    '417'          => [
        'message' => 'No se puede satisfacer la solicitud porque se trata de una parte de un recurso que el servidor no puede devolver.',
        'title'   => 'Expectativa fallida',
    ],
    '418'          => [
        'message' => 'Soy una tetera',
        'title'   => 'Soy una tetera',
    ],
    '419'          => [
        'message' => 'Tu sesión ha expirado. Por favor inicia sesión nuevamente.',
        'title'   => 'La sesión ha expirado',
    ],
    '421'          => [
        'message' => 'El servidor no puede resolver la solicitud.',
        'title'   => 'Solicitud mal dirigida',
    ],
    '422'          => [
        'message' => 'La solicitud no se puede procesar debido a errores semánticos o problemas similares.',
        'title'   => 'Entidad no procesable',
    ],
    '423'          => [
        'message' => 'El recurso del método solicitado está bloqueado y es inaccesible.',
        'title'   => 'Bloqueado',
    ],
    '424'          => [
        'message' => 'La solicitud falló porque una solicitud de la que dependía la solicitud inicial también falló.',
        'title'   => 'Dependencia fallida',
    ],
    '425'          => [
        'message' => 'Una solicitud que pueda repetirse no será procesada.',
        'title'   => 'Demasiado temprano',
    ],
    '426'          => [
        'message' => 'El servidor se niega a procesar la solicitud utilizando el protocolo actual a menos que el cliente actualice a un protocolo diferente.',
        'title'   => 'Se requiere actualización',
    ],
    '428'          => [
        'message' => 'La solicitud debe ser condicional.',
        'title'   => 'Condición previa requerida',
    ],
    '429'          => [
        'message' => 'Se han enviado demasiadas solicitudes en un corto período de tiempo.',
        'title'   => 'Demasiadas solicitudes',
    ],
    '431'          => [
        'message' => 'El servidor no puede procesar la solicitud porque los campos del encabezado son demasiado grandes.',
        'title'   => 'Los campos del encabezado de solicitud son demasiado grandes',
    ],
    '444'          => [
        'message' => 'Conexión cerrada sin respuesta.',
        'title'   => 'Conexión cerrada sin respuesta',
    ],
    '449'          => [
        'message' => 'Reintentar.',
        'title'   => 'Reintentar',
    ],
    '451'          => [
        'message' => 'El recurso solicitado no está disponible por razones legales.',
        'title'   => 'No disponible por razones legales',
    ],
    '499'          => [
        'message' => 'El cliente cerró la solicitud.',
        'title'   => 'El cliente cerró la solicitud',
    ],
    '500'          => [
        'message' => 'The server has encountered an unexpected error and cannot complete the request. Please wait a few minutes and try again.',
        'title'   => 'Internal Server Error',
    ],
    '501'          => [
        'message' => 'The request cannot be satisfied or the request method is not recognized.',
        'title'   => 'Not Implemented',
    ],
    '502'          => [
        'message' => 'Invalid response received.',
        'title'   => 'Bad Gateway',
    ],
    '503'          => [
        'message' => 'System maintenance is currently underway. Service will be restored once the process is complete.',
        'title'   => 'Maintenance Mode',
    ],
    '504'          => [
        'message' => 'Time ran out while waiting for a response.',
        'title'   => 'Gateway Timeout',
    ],
    '505'          => [
        'message' => 'The HTTP request is not accepted because it has an unsupported version.',
        'title'   => 'HTTP Version Not Supported',
    ],
    '506'          => [
        'message' => 'Internal server configuration error.',
        'title'   => 'Variant Also Negotiates',
    ],
    '507'          => [
        'message' => 'Insufficient storage to properly process the request.',
        'title'   => 'Insufficient Storage',
    ],
    '508'          => [
        'message' => 'An infinite loop has been detected and the request cannot be continued.',
        'title'   => 'Loop Detected',
    ],
    '509'          => [
        'message' => 'Límite de ancho de banda excedido.',
        'title'   => 'Límite de ancho de banda excedido',
    ],
    '510'          => [
        'message' => 'No extendido.',
        'title'   => 'No extendido',
    ],
    '511'          => [
        'message' => 'Authentication is required to access the network. A link is sent to successfully authenticate.',
        'title'   => 'Network Authentication Required',
    ],
    '520'          => [
        'message' => 'Se ha producido un error desconocido. Por favor, ponte en contacto con el administrador del sistema.',
        'title'   => 'Error Desconocido',
    ],
    '521'          => [
        'message' => 'El servidor web está inactivo.',
        'title'   => 'El servidor web está inactivo',
    ],
    '522'          => [
        'message' => 'Tiempo de conexión agotado.',
        'title'   => 'Tiempo de conexión agotado',
    ],
    '523'          => [
        'message' => 'El origen es inalcanzable.',
        'title'   => 'El origen es inalcanzable',
    ],
    '524'          => [
        'message' => 'Se produjo un tiempo de espera.',
        'title'   => 'Se produjo un tiempo de espera',
    ],
    '525'          => [
        'message' => 'Falló el protocolo de enlace SSL.',
        'title'   => 'Falló el protocolo de enlace SSL',
    ],
    '526'          => [
        'message' => 'Certificado SSL no válido.',
        'title'   => 'Certificado SSL no válido',
    ],
    '527'          => [
        'message' => 'Error del cañón de riel.',
        'title'   => 'Error del cañón de riel',
    ],
    '598'          => [
        'message' => 'Error de tiempo de espera de lectura de red.',
        'title'   => 'Error de tiempo de espera de lectura de red',
    ],
    '599'          => [
        'message' => 'Error de tiempo de espera de conexión de red.',
        'title'   => 'Error de tiempo de espera de conexión de red',
    ],
    'unknownError' => [
        'message' => 'Se ha producido un error desconocido. Por favor, ponte en contacto con el administrador del sistema.',
        'title'   => 'Error Desconocido',
    ],
];

<?php

declare(strict_types=1);

return [
    '0'            => [
        'message' => 'An unknown error has occurred. Please contact your System Administrator.',
        'title'   => 'Unknown Error',
    ],
    '100'          => [
        'message' => 'You should continue with the request or ignore it if it is already completed.',
        'title'   => 'Continue',
    ],
    '101'          => [
        'message' => 'The server accepts the proposed protocol change.',
        'title'   => 'Switching Protocols',
    ],
    '102'          => [
        'message' => 'The server has received the request and is still processing it.',
        'title'   => 'Processing',
    ],
    '200'          => [
        'message' => 'The request was successful.',
        'title'   => 'OK',
    ],
    '201'          => [
        'message' => 'The request was successful and a new resource was created as a result.',
        'title'   => 'Created',
    ],
    '202'          => [
        'message' => 'The request has been received but has not yet been acted upon.',
        'title'   => 'Accepted',
    ],
    '203'          => [
        'message' => 'The request was completed successfully, but its content was not obtained from the originally requested source, but was instead collected from a local copy or a third party.',
        'title'   => 'Non-Authoritative Information',
    ],
    '204'          => [
        'message' => 'The request was completed successfully but its response contains no content.',
        'title'   => 'No Content',
    ],
    '205'          => [
        'message' => 'The request has completed successfully, but its response has no content and the user agent has yet to initialize the page from which the request was made.',
        'title'   => 'Reset Content',
    ],
    '206'          => [
        'message' => 'The request will partially serve the requested content.',
        'title'   => 'Partial Content',
    ],
    '207'          => [
        'message' => 'Information about multiple resources is transmitted in situations where multiple status codes might be appropriate (XML message).',
        'title'   => 'Multi-Status',
    ],
    '208'          => [
        'message' => 'The listing of DAV items has already been previously notified, so they will not be listed again.',
        'title'   => 'Already Reported',
    ],
    '226'          => [
        'message' => 'The server has fulfilled a request for the resource and the response is a representation of the result of one or more instance manipulations applied to the current instance.',
        'title'   => 'IM Used',
    ],
    '300'          => [
        'message' => 'This request has more than one possible response. User-Agent or the user must choose one of them.',
        'title'   => 'Multiple Choices',
    ],
    '301'          => [
        'message' => 'The URI of the requested resource has been permanently changed.',
        'title'   => 'Moved Permanently',
    ],
    '302'          => [
        'message' => 'The requested URI resource has been temporarily changed.',
        'title'   => 'Found',
    ],
    '303'          => [
        'message' => 'Directs the client to a new resource requested at another address.',
        'title'   => 'See Other',
    ],
    '304'          => [
        'message' => 'The resource has not been modified. You can continue using the same cached version.',
        'title'   => 'Not Modified',
    ],
    '305'          => [
        'message' => 'The requested response must be accessed from a proxy.',
        'title'   => 'Use Proxy',
    ],
    '307'          => [
        'message' => 'The resource is now temporarily located at another URI.',
        'title'   => 'Temporary Redirect',
    ],
    '308'          => [
        'message' => 'The resource is now permanently located at another URI.',
        'title'   => 'Permanent Redirect',
    ],
    '400'          => [
        'message' => 'The server is unable or unwilling to process the request due to an error.',
        'title'   => 'Bad Request',
    ],
    '401'          => [
        'message' => 'You do not have valid authentication credentials.',
        'title'   => 'Unauthorized',
    ],
    '402'          => [
        'message' => 'Payment is required.',
        'title'   => 'Payment Required',
    ],
    '403'          => [
        'message' => 'The requested page could not be found. Please check the address and try again.',
        'title'   => 'Forbidden',
    ],
    '404'          => [
        'message' => 'The page you are looking for might have been removed, renamed, or is temporarily unavailable.',
        'title'   => 'Page Not Found',
    ],
    '405'          => [
        'message' => 'This operation is not allowed.',
        'title'   => 'Method Not Allowed',
    ],
    '406'          => [
        'message' => 'The requested information cannot be accepted.',
        'title'   => 'Not Acceptable',
    ],
    '407'          => [
        'message' => 'Authentication by the Proxy server is required.',
        'title'   => 'Proxy Authentication Required',
    ],
    '408'          => [
        'message' => 'The wait timed out because a request was not received within the allotted time.',
        'title'   => 'Request Timeout',
    ],
    '409'          => [
        'message' => 'The request cannot be fulfilled because there is a conflict with the resource.',
        'title'   => 'Conflict',
    ],
    '410'          => [
        'message' => 'The requested content has been permanently deleted from the server and will not be restored.',
        'title'   => 'Gone',
    ],
    '411'          => [
        'message' => 'The content of the header field does not have the required length.',
        'title'   => 'Length Required',
    ],
    '412'          => [
        'message' => 'The server does not meet the requested preconditions.',
        'title'   => 'Precondition Failed',
    ],
    '413'          => [
        'message' => 'The request is larger than the limits defined by the server and the server refuses to process it.',
        'title'   => 'Payload Too Large',
    ],
    '414'          => [
        'message' => 'The requested URI (Uniform Resource Identifier) is too long for the server to process.',
        'title'   => 'URI Too Long',
    ],
    '415'          => [
        'message' => 'The request uses a media format that the server does not support.',
        'title'   => 'Unsupported Media Type',
    ],
    '416'          => [
        'message' => 'The request cannot be satisfied because it is for a portion of a resource that the server cannot return.',
        'title'   => 'Range Not Satisfiable',
    ],
    '417'          => [
        'message' => 'The request cannot be satisfied because it is for a portion of a resource that the server cannot return.',
        'title'   => 'Expectation Failed',
    ],
    '418'          => [
        'message' => 'I\'m a teapot',
        'title'   => 'I\'m a teapot',
    ],
    '419'          => [
        'message' => 'Your session has timed out. Please log in again.',
        'title'   => 'Session Has Expired',
    ],
    '421'          => [
        'message' => 'The server cannot resolve the request.',
        'title'   => 'Misdirected Request',
    ],
    '422'          => [
        'message' => 'The request cannot be processed due to semantic errors or similar problems.',
        'title'   => 'Unprocessable Entity',
    ],
    '423'          => [
        'message' => 'The requested method resource is locked and inaccessible.',
        'title'   => 'Locked',
    ],
    '424'          => [
        'message' => 'The request failed because a request on which the initial request depended also failed.',
        'title'   => 'Failed Dependency',
    ],
    '425'          => [
        'message' => 'A request that can be repeated will not be processed.',
        'title'   => 'Too Early',
    ],
    '426'          => [
        'message' => 'The server refuses to process the request using the current protocol unless the client upgrades to a different protocol.',
        'title'   => 'Upgrade Required',
    ],
    '428'          => [
        'message' => 'The request must be conditional.',
        'title'   => 'Precondition Required',
    ],
    '429'          => [
        'message' => 'Too many requests have been sent in a short period of time.',
        'title'   => 'Too Many Requests',
    ],
    '431'          => [
        'message' => 'The server cannot process the request because the header fields are too large.',
        'title'   => 'Request Header Fields Too Large',
    ],
    '444'          => [
        'message' => 'Connection Closed Without Response.',
        'title'   => 'Connection Closed Without Response',
    ],
    '449'          => [
        'message' => 'Retry.',
        'title'   => 'Retry',
    ],
    '451'          => [
        'message' => 'The requested resource is not available for legal reasons.',
        'title'   => 'Unavailable For Legal Reasons',
    ],
    '499'          => [
        'message' => 'The client closed the request.',
        'title'   => 'The client closed the request',
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
        'message' => 'Bandwidth Limit Exceeded.',
        'title'   => 'Bandwidth Limit Exceeded',
    ],
    '510'          => [
        'message' => 'Not Extended.',
        'title'   => 'Not Extended',
    ],
    '511'          => [
        'message' => 'Authentication is required to access the network. A link is sent to successfully authenticate.',
        'title'   => 'Network Authentication Required',
    ],
    '520'          => [
        'message' => 'An unknown error has occurred. Please contact your System Administrator.',
        'title'   => 'Unknown Error',
    ],
    '521'          => [
        'message' => 'Web Server is Down.',
        'title'   => 'Web Server is Down',
    ],
    '522'          => [
        'message' => 'Connection Timed Out.',
        'title'   => 'Connection Timed Out',
    ],
    '523'          => [
        'message' => 'Origin Is Unreachable.',
        'title'   => 'Origin Is Unreachable',
    ],
    '524'          => [
        'message' => 'A Timeout Occurred.',
        'title'   => 'A Timeout Occurred',
    ],
    '525'          => [
        'message' => 'SSL Handshake Failed.',
        'title'   => 'SSL Handshake Failed',
    ],
    '526'          => [
        'message' => 'Invalid SSL Certificate.',
        'title'   => 'Invalid SSL Certificate',
    ],
    '527'          => [
        'message' => 'Railgun Error.',
        'title'   => 'Railgun Error',
    ],
    '598'          => [
        'message' => 'Network Read Timeout Error.',
        'title'   => 'Network Read Timeout Error',
    ],
    '599'          => [
        'message' => 'Network Connect Timeout Error.',
        'title'   => 'Network Connect Timeout Error',
    ],
    'unknownError' => [
        'message' => 'An unknown error has occurred. Please contact your System Administrator.',
        'title'   => 'Unknown Error',
    ],
];

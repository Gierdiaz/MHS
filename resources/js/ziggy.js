const Ziggy = {
    "url": "http://127.0.0.1:8000",
    "port": 8000,
    "defaults": {},
    "routes": {
        "users.index": {
            "uri": "users",
            "methods": ["GET", "HEAD"]
        },
        "patients.index": {
            "uri": "patients",
            "methods": ["GET", "HEAD"]
        },
        "patients.show": {
            "uri": "patients/{patient}",
            "methods": ["GET", "HEAD"],
            "parameters": ["patient"]
        }
    }
};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };

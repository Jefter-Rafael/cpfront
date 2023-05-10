module.exports = {
    "globDirectory": "dist/",
    "globPatterns": [
        "**/*.html",
        "**/*.css",
        "**/*.js",
        "../jsons/*.json" // Adicione essa linha
    ],
    "swDest": "dist/sw.js",
    "runtimeCaching": [
        {
            "urlPattern": /^https:\/\/comparador\.agreablecode\.com\//,
            "handler": "networkFirst"
        }
    ]
};
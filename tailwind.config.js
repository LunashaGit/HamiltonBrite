module.exports = {
    darkMode: "class",

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ["poppins", "nunito"],
            nunito: ["nunito", "poppins"],
        },
        extend: {
            maxWidth: {
                address: "22ch",
            },
            backgroundImage: {
                concert: "url('/assets/livephoto.jpg')",
                manathan: "url('/assets/manathan.jpg')",
                paris: "url('/assets/paris.jpg')",
                bridge: "url('/assets/bridge.jpg')",
            },
            colors: {
                "dark-silver": "#87A0C7",
                "silver": "#7F8CA1",
                "silver-blue": "#506587",
                lightblue: "#91B2C7",
                pourpre: "#A0366F",
                whitesmoke: "#f5f5f5",
                slate: "#262626",
                whiteish: "#f5f5f5",
                lightgrey: "#dcdcdc",
                newgrey : "#4B586E",
                littlegrey: "#8097BD",

            },
        },
    },
    plugins: [require("@tailwindcss/line-clamp")],
};

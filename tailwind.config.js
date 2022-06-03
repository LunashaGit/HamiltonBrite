module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins : ['poppins', 'nunito'],
            nunito : ['nunito', 'poppins'],

        },
        extend: {
            backgroundImage: {
                'concert': "url('/assets/livephoto.jpg')",
                'manathan': "url('/assets/manathan.jpg')",
                'paris': "url('/assets/paris.jpg')",
                'bridge': "url('/assets/bridge.jpg')",
              },
              colors:{
                  'silver':'#E5E4E2',
                  'dark-silver':'#7F8CA1',
                  'silver-blue':'#506587',
                  'lightblue':'#91B2C7',
                  'pourpre':'#A0366F',
                  'whitesmoke':'#f5f5f5',
              }
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
}

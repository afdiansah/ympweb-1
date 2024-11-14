
          // Fungsi dipanggil ketika API YouTube siap
          function onYouTubeIframeAPIReady() {
            var player = new YT.Player('video-placeholderz', {
              // Hapus pengaturan height dan width agar video responsif
              //Vid 1
              videoId: 'JwT198YZA6w',
              playerVars: {
                'autoplay': 0,
                'controls': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3
              },
              events: {
                'onReady': onPlayerReady
              }
            });
            
            var player = new YT.Player('video-placeholder', {
              // Hapus pengaturan height dan width agar video responsif
              //Soal
              videoId: 'cWA-L8ZHMz0',
              playerVars: {
                'autoplay': 0,
                'controls': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3
              },
              events: {
                'onReady': onPlayerReady
              }
            });
            
            var player = new YT.Player('video-placeholder2', {
              // Hapus pengaturan height dan width agar video responsif
              //Vid 2
              videoId: '0qRJbrS4RjA',
              playerVars: {
                'autoplay': 0,
                'controls': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3
              },
              events: {
                'onReady': onPlayerReady
              }
            });
            
            var player = new YT.Player('video-placeholder3', {
              // Hapus pengaturan height dan width agar video responsif
              //Vid 3
              videoId: 'DQQLKUXxzC8',
              playerVars: {
                'autoplay': 0,
                'controls': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3
              },
              events: {
                'onReady': onPlayerReady
              }
            });
            
            var player = new YT.Player('video-placeholder4', {
              // Hapus pengaturan height dan width agar video responsif
              //Vid 4
              videoId: 'pc2ysXx46qE',
              playerVars: {
                'autoplay': 0,
                'controls': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3
              },
              events: {
                'onReady': onPlayerReady
              }
            });
            
            var player = new YT.Player('video-placeholder5', {
              // Hapus pengaturan height dan width agar video responsif
              //Vid 5
              videoId: 'mSOKNXMbs8g',
              playerVars: {
                'autoplay': 0,
                'controls': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3
              },
              events: {
                'onReady': onPlayerReady
              }
            });
          }
        
          // Fungsi dipanggil ketika video siap diputar
          function onPlayerReady(event) {
            event.target.playVideo();
          }

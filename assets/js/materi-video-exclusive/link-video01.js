
          // Fungsi dipanggil ketika API YouTube siap
          function onYouTubeIframeAPIReady() {
            var player = new YT.Player('video-placeholderz', {
              // Hapus pengaturan height dan width agar video responsif
              videoId: 'IrHOm5y_MWc',
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
              videoId: '4x-KQ9DLIvE',
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
              videoId: 'KA2bzLfn0uY',
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
              videoId: 'fs9EmoFTKyg',
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
              videoId: 'CNcbnvzqbY0',
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
              videoId: 'kXrP12FaWMo',
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
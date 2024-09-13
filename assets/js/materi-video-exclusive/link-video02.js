
          // Fungsi dipanggil ketika API YouTube siap
          function onYouTubeIframeAPIReady() {
            var player = new YT.Player('video-placeholderz', {
              // Hapus pengaturan height dan width agar video responsif
              videoId: 'JA-0viU6ibw',
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
              videoId: 'FiWN6BF40VQ',
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
              videoId: 'vk5xX3_FHI4',
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
              videoId: 'xJnX5lJ7Z8M',
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
              videoId: 'WoU00mNExMU',
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
              videoId: 'atj1p3izxjc',
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
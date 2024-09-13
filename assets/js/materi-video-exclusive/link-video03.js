
          // Fungsi dipanggil ketika API YouTube siap
          function onYouTubeIframeAPIReady() {
            var player = new YT.Player('video-placeholderz', {
              // Hapus pengaturan height dan width agar video responsif
              videoId: 'F9I4cvT-t1U',
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
              videoId: 'OoD-GgGX9xU',
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
              videoId: 'wq40coGOKbY',
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
              videoId: 'jH1TQYJ3IGg',
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
              videoId: 'yAye6HmKtFQ',
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
              videoId: 'q3FMs7-5g1U',
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

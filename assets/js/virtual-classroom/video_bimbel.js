  // Fungsi dipanggil ketika API YouTube siap
      function onYouTubeIframeAPIReady() {
        var player = new YT.Player('video-placeholder', {
          // Hapus pengaturan height dan width agar video responsif
          videoId: 'SFyf64EcWlg',
          playerVars: {
            'autoplay': 1,
            'controls': 0,
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
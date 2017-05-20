export default {
    elems: {
        video: document.querySelector('#video'),
        container: document.querySelector('.lead-video'),
        play: document.querySelector('#play_btn'),
        pause: document.querySelector('#pause_btn')
    },

    init() {
        this.elems.container.classList.add('can-control');
        this.elems.container.addEventListener('click', () => this.togglePlay(), false);
        this.elems.video.addEventListener('play', () => this.handlePlay(), false);
        this.elems.video.addEventListener('pause', () => this.handlePause(), false);
    },

    togglePlay() {
        var video = this.elems.video;
        if(video.paused) {
            return video.play();
        }
        video.pause();
    },

    handlePlay() {
        var container = this.elems.container;
        container.classList.remove('paused');
        container.classList.add('playing');
        setTimeout(() => container.classList.remove('playing'), 2000);
    },

    handlePause() {
        var container = this.elems.container;
        container.classList.remove('playing');
        container.classList.add('paused');
    }
}
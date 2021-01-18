class Selectors {
    constructor() {
        this.currentBtn = document.querySelector('#current__season')
        this.lastBtn = document.querySelector('#last__season')
        this.careerBtn = document.querySelector('#career__stats')
        this.playoffBtn = document.querySelector('#playoff__stats')
        this.current_season = document.querySelector('.current__season')
        this.last_season = document.querySelector('.last__season')
        this.career_stats = document.querySelector('.career__stats')
        this.playoff_stats = document.querySelector('.playoff__stats')
    }
}

class Buttons extends Selectors {
    current_stats() {
        this.currentBtn.addEventListener('click', (e) => {
            e.preventDefault()
            this.current_season.style.display = 'block'
            this.last_season.style.display = 'none'
            if (window.location.href.match('player.php')) {
                this.career_stats.style.display = 'none'
                this.playoff_stats.style.display = 'none'
            }
        })
    }

    last_stats() {
        this.lastBtn.addEventListener('click', (e) => {
            e.preventDefault()
            this.last_season.style.display = 'block'
            this.current_season.style.display = 'none'
            if (window.location.href.match('player.php')) {
                this.career_stats.style.display = 'none'
                this.playoff_stats.style.display = 'none'
            }
        })
    }

    player_career_stats() {
        this.careerBtn.addEventListener('click', (e) => {
            e.preventDefault()
            this.career_stats.style.display = 'block'
            this.last_season.style.display = 'none'
            this.current_season.style.display = 'none'
            this.playoff_stats.style.display = 'none'
        })
    }

    player_playoff_stats() {
        this.playoffBtn.addEventListener('click', (e) => {
            e.preventDefault()
            this.career_stats.style.display = 'none'
            this.current_season.style.display = 'none'
            this.last_season.style.display = 'none'
            this.playoff_stats.style.display = 'block'
        })
    }
}

let team_stats = new Buttons()
team_stats.current_stats()
team_stats.last_stats()
team_stats.player_career_stats()
team_stats.player_playoff_stats()

import './bootstrap'
import '../css/app.css'
import {
    Alpine,
    Livewire,
} from '../../vendor/livewire/livewire/dist/livewire.esm'

Alpine.store('sidebarToggle', {
    on: false,
    toggle() {
        this.on = !this.on
    },
})

Livewire.start()

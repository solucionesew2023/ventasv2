import './bootstrap';
import Swal from 'sweetalert2';
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;
window.Swal = Swal;

Alpine.plugin(focus);

Alpine.start();

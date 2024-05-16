import Alpine from 'alpinejs';
import initialData from './initialDataAlpine.js';
import '../../utilities/isBlobable.js';
import '../../utilities/toBlob.js';
import '../../utilities/toDataURL.js';

window.Alpine = Alpine;

Alpine.data('initialData', initialData);
Alpine.start();

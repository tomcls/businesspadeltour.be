import * as FilePond from 'filepond';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import fr_FR from 'filepond/locale/fr-fr.js';
import nl_NL from 'filepond/locale/nl-nl.js';
// Register the plugin
window.fr_FR = fr_FR;
window.nl_NL = nl_NL;
window.FilePond = FilePond;
window.FilePondPluginImagePreview = FilePondPluginImagePreview;
window.FilePond.registerPlugin(FilePondPluginImagePreview);
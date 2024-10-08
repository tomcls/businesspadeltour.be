@props([
    'lang' => 'fr'
])
<div
        wire:ignore
        x-data={pond:null}
        x-init="
        window.FilePond.setOptions({
            allowMultiple:   'true',
            allowImageExifOrientation: true,
            server: {
                initfile: () => {
                    console.log('initfile')
                },
                addfilestart: () => {
                    console.log('addfilestart')
                },
                preparefile: () => {
                    console.log('preparefile')
                },
                init: () => {
                    console.log('init')
                },
                addfile: () => {
                    console.log('addfile')
                },
                processfilestart: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    console.log('processfilestart')
                },
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    console.log('process')
                    @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress) },
                    revert: (filename, load) => {
                        @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
                    },
                },
                onprocessfiles: () => {
                    console.log('onprocessfiles')
                    Livewire.emit('saveImages');
                    pond.removeFiles();
                    
                }
            });
            @if($lang == 'fr') 
                FilePond.setOptions(fr_FR);
            @endif
            @if($lang == 'nl') 
                FilePond.setOptions(nl_NL);
            @endif
            pond = window.FilePond.create($refs.input);
            document.addEventListener('FilePond:addfilestart', (e) => {
                console.log('FilePond ready for use', e.detail);
            });
            document.addEventListener('FilePond:init', (e) => {
                console.log('init', e.detail);
            });
            document.addEventListener('FilePond:processfilestart', (e) => {
                console.log('processfilestart', e.detail);
            });
            document.addEventListener('FilePond:processfiles', (e) => {
                console.log('processfilestart', e.detail);
            });
            document.addEventListener('FilePond:initfile', (e) => {
                Livewire.emit('onSaveImages');
                console.log('initfile', e.detail);
            });"

        >
    <input type="file" x-ref="input" />
</div>
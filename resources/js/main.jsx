import React from "react"
import { createRoot } from "react-dom/client"
import FilamentBlockNoteEditor from "./FilamentBlockNoteEditor"

window.React = React

document.addEventListener('alpine:init', () => {

    Alpine.data('blocknoteEditor', ({ value, statePath }) => ({

        value: value,
        statePath: statePath,

        handleOnChange(editor) {
            this.value = JSON.stringify(editor.topLevelBlocks)
        },

        // async uploadFile(file) {

        //     return this.$wire.upload(
        //         `componentFileAttachments.${statePath}`,
        //         file,

        //         // success callback
        //         (uploadedFilename) => {
        //           this.$wire
        //             .getComponentFileAttachmentUrl(statePath)
        //             .then((url) => {
        //               if (!url) {
        //                 return resolve({
        //                   success: 0,
        //                 });
        //               }
        //               return resolve({
        //                 success: 1,
        //                 file: {
        //                   url: url,
        //                 },
        //               });
        //             });
        //         }
        //     );
        // },

        init() {

            createRoot(this.$refs.editor).render(
                <FilamentBlockNoteEditor
                    value={this.value}
                    onChange={(editor) => this.handleOnChange(editor)} 
                />
            )

        },

    }))

})

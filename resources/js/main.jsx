import React from "react"
import { createRoot } from "react-dom/client"
import FilamentBlockNoteEditor from "./FilamentBlockNoteEditor"

window.React = React

document.addEventListener('alpine:init', () => {

    Alpine.data('blocknoteEditor', ({ value, statePath }) => ({

        value: value,
        statePath: statePath,

        handleOnChange(editor) {
            this.value = JSON.stringify(editor.document)
            console.log(this.value)
            console.log(this)
        },

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

import "@blocknote/core/style.css"
import { BlockNoteView, useBlockNote } from "@blocknote/react"

export default function FilamentBlockNoteEditor({ value, onChange })
{
    const editor = useBlockNote({

        initialContent: value ? JSON.parse(value) : null,

        onEditorContentChange: (editor) => {
            onChange(editor)
        },

        // uploadFile: uploadToTmpFilesDotOrg_DEV_ONLY,

    })

    return <BlockNoteView editor={editor} />
}

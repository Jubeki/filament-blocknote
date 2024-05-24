import { useCreateBlockNote } from "@blocknote/react";
import { BlockNoteView } from "@blocknote/mantine";
import "@blocknote/mantine/style.css";

export default function FilamentBlockNoteEditor({ value, onChange })
{
    const editor = useCreateBlockNote({
        initialContent: value ? JSON.parse(value) : undefined,
        trailingBlock: false,
    })

    return <BlockNoteView editor={editor} onChange={() => onChange(editor)}/>
}

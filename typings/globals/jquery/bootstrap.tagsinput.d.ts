/// <reference path="jquery.d.ts" />
interface TagsInputTypeaheadOptions {
  source?: Array<string>;
  afterSelect?: Function;
}
 
interface TagsInputOptions {
  tagClass?: string;
  itemValue?: string;
  itemText?: string;
  confirmKeys?: Array<number>;
  maxTags?: number;
  maxChars?: number;
  trimValue?: boolean;
  allowDuplicates?: boolean;
  focusClass?: string;
  freeInput?: boolean;
  cancelConfirmKeysOnEmpty?: boolean;
  onTagExists?: (item: any, $tag: any) => void;
  typeahead?: TagsInputTypeaheadOptions;
}
 
interface TagsInput {
  (options?: TagsInputOptions): JQuery;
  (methodName: string, ...params: any[]): JQuery;
}
 
interface JQuery {
  tagsinput: TagsInput; 
  
}

interface ExtJqueryEventObject extends JQuery{
  cancel:Boolean;
}
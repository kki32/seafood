/// <reference path="jquery.d.ts" />

interface ProgressBarOptions {
  value?: number;

}

interface ProgressBar {
  (options?: ProgressBarOptions): number;
  (methodName: string, ...params: any[]): number;
}
 
interface JQuery {
  progressbar: ProgressBar; 
}


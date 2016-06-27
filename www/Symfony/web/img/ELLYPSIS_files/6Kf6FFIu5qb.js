/*!CK:2678072632!*//*1457737590,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["du7f6"]); }

__d('PagesComposerPostButton.react',['cx','fbt','invariant','ix','ReactComposerActions','ReactComposerAttachmentType','ReactComposerConfig','ReactComposerContextMixin','ReactComposerAttachmentStore','ReactComposerNUXActions','ReactComposerNUXStore','ReactComposerPhotoCarouselStore','ReactComposerPhotoCarouselUtils','ReactComposerPhotoStore','ReactComposerPhotoUploadStore','ReactComposerPostButtonContainer.react','ReactComposerPropsAndStoreBasedStateMixin','ReactComposerSlideshowStore','ReactComposerSlideshowUtils','ReactComposerStore','ReactComposerVideoUploadStore','ComposerNUXType','DOM','PagesComposerPostButtonUtils','ReactComponentWithPureRenderMixin','React','ReactDOM','ContextualDialogArrow','Image.react','PagesComposerActions','PopoverMenu.react','PagePostActionButtonActionTypes','PostBackdateDialog.react','PostScheduleAndPostEndDialog.react','ReactLayeredComponentMixin','TooltipMixin','XUIAmbientNUX.react','XUIButton.react','XUIButtonGroup.react','ReactXUIMenu','emptyFunction'],function a(b,c,d,e,f,g,h,i,j,k){'use strict';if(c.__markCompiled)c.__markCompiled();var l=c('ReactXUIMenu').Item,m=c('React').createClass({displayName:'ComponentWithTooltipMixin',mixins:[c('TooltipMixin')],render:function(){return c('React').Children.only(this.props.children);}}),n=c('React').createClass({displayName:'PagesComposerPostButton',mixins:[c('ReactComposerContextMixin'),c('ReactComponentWithPureRenderMixin'),c('ReactLayeredComponentMixin'),c('ReactComposerPropsAndStoreBasedStateMixin')(c('ReactComposerAttachmentStore'),c('ReactComposerNUXStore'),c('ReactComposerPhotoCarouselStore'),c('ReactComposerPhotoStore'),c('ReactComposerPhotoUploadStore'),c('ReactComposerSlideshowStore'),c('ReactComposerStore'),c('ReactComposerVideoUploadStore'))],propTypes:{config:c('ReactComposerConfig').isRequired},statics:{calculateState:function(o,p,q){var r=p.config.attachmentsConfig[c('ReactComposerAttachmentType').MEDIA],s=null;if(c('ReactComposerPhotoCarouselStore').isPhotoCarouselSelected(o)&&c('ReactComposerPhotoCarouselUtils').isPagePostButtonDisabled(o)){if(c('ReactComposerPhotoCarouselStore').shouldShowURLEditArea(o)){s=i._("Entrez une URL pour cr\u00e9er votre carrousel photo.");}else if(!c('ReactComposerPhotoCarouselStore').isCarouselPreviewCompleted(o))s=i._("2 images et une URL sont n\u00e9cessaires pour publier votre carrousel.");}else if(c('ReactComposerSlideshowStore').isSlideshowSelected(o)&&c('ReactComposerSlideshowUtils').isPagePostButtonDisabled(o))if(c('ReactComposerSlideshowUtils').hasTooFewSlides(o)){s=i._({"*":"Vous devez ajouter au moins {Minimum number of images} photos pour publier un diaporama."},[i.param('Minimum number of images',r.slideshowConfig.minPhotoNum,[0])]);}else if(c('ReactComposerSlideshowUtils').hasTooManySlides(o))s=i._({"*":"Vous pouvez ajouter {Maximum number of images} photos maximum pour publier un diaporama."},[i.param('Maximum number of images',r.slideshowConfig.maxPhotoNum,[0])]);var t=null;if(c('ReactComposerSlideshowStore').isSlideshowSelected(o)&&p.config.nuxConfig.shouldShowSlideshowNux&&!c('ReactComposerNUXStore').hasNUXBeenSeen(o,c('ComposerNUXType').SLIDESHOW_NUX))t={content:i._("Quand vous publiez votre message, vous cr\u00e9ez un diaporama qui est lu comme une vid\u00e9o."),onClose:function(){return c('ReactComposerNUXActions').nuxWasSeen(o,c('ComposerNUXType').SLIDESHOW_NUX);}};return {disabled:c('PagesComposerPostButtonUtils').isPagePostButtonDisabled(o,r.photoLimit),disabledDropdown:c('PagesComposerPostButtonUtils').isPageDropdownButtonDisabled(o),nuxConfig:t,tooltips:s,selectedAttachment:c('ReactComposerAttachmentStore').getSelectedAttachmentID(o.valueOf())};}},componentWillMount:function(){!this.props.config.postButtonConfig?j(0):undefined;},renderLayers:function(){return {nux:c('React').createElement(c('XUIAmbientNUX.react'),{alignment:'right',contextRef:function(){return this.refs.button;}.bind(this),onCloseButtonClick:this.state.nuxConfig?this.state.nuxConfig.onClose:null,position:'above',shown:!!this.state.nuxConfig},this.state.nuxConfig?this.state.nuxConfig.content:null)};},render:function(){var o=this.props.config.postButtonConfig.postActionsConfig;return (c('React').createElement(m,{tooltip:this.state.tooltips},c('React').createElement(c('XUIButtonGroup.react'),null,c('React').createElement(c('ReactComposerPostButtonContainer.react'),{forceDisabled:this.state.disabled,label:this._getLabel(o.defaultAction),config:this.props.config,onClickPreprocess:this._onClickPreprocess,ref:'button'}),this._shouldShowDropdownMenu()?c('React').createElement(c('PopoverMenu.react'),{className:"_lde",menu:this._renderMenu(),alignh:'right',alignv:'middle',layerBehaviors:[c('ContextualDialogArrow')],position:'below'},c('React').createElement(c('XUIButton.react'),{disabled:this.state.disabledDropdown,imageRight:c('React').createElement(c('Image.react'),{src:k('/images/ui/x/button/dark/chevron.png')}),size:'medium',use:'confirm'})):null)));},_onClickPreprocess:function(){switch(this.props.config.postButtonConfig.postActionsConfig.defaultAction){case c('PagePostActionButtonActionTypes').SCHEDULE:this._onScheduleClicked();return false;case c('PagePostActionButtonActionTypes').SAVE_DRAFT:this._onDraftClicked();return false;case c('PagePostActionButtonActionTypes').ADS_POST:this._onAdsPostClicked();return false;case c('PagePostActionButtonActionTypes').PUBLISH:this._onPublishClicked();return false;}return true;},_shouldShowDropdownMenu:function(){var o=this.props.config.postButtonConfig.postActionsConfig.otherActions,p=this.state.selectedAttachment;return this.context.actorID===this.context.targetID&&o&&o.length&&p!==c('ReactComposerAttachmentType').QUESTION&&p!==c('ReactComposerAttachmentType').QANDA;},_renderMenu:function(){return (c('React').createElement(c('ReactXUIMenu'),null,this.props.config.postButtonConfig.postActionsConfig.otherActions.map(function(o){return (c('React').createElement(l,{key:o,onclick:this._onClickHandler(o)},this._getLabel(o)));}.bind(this))));},_getLabel:function(o){if(this.context.actorID!==this.context.targetID)return i._("Publier");switch(o){case c('PagePostActionButtonActionTypes').SCHEDULE:return i._("Programmer");case c('PagePostActionButtonActionTypes').BACKDATE:return i._("Antidater");case c('PagePostActionButtonActionTypes').SAVE_DRAFT:return i._("Enregistrer le brouillon");case c('PagePostActionButtonActionTypes').PUBLISH:return i._("Publier");case c('PagePostActionButtonActionTypes').ADS_POST:return i._("Enregistrer la publication non publi\u00e9e");}j(0);},_onClickHandler:function(o){switch(o){case c('PagePostActionButtonActionTypes').SCHEDULE:return this._onScheduleClicked;case c('PagePostActionButtonActionTypes').BACKDATE:return this._onBackdateClicked;case c('PagePostActionButtonActionTypes').SAVE_DRAFT:return this._onDraftClicked;case c('PagePostActionButtonActionTypes').PUBLISH:return this._onPublishClicked;}j(0);},_onScheduleClicked:function(){var o=this.props.config.postButtonConfig,p=c('ReactDOM').render(c('React').createElement(c('PostScheduleAndPostEndDialog.react'),{timezoneStr:o.timezoneString,onSubmit:this._onScheduledTimeSelected,defaultScheduledTimeDelta:o.defaultScheduledTimeDelta}),c('DOM').create('div'));!(p instanceof c('PostScheduleAndPostEndDialog.react'))?j(0):undefined;p.show();},_onScheduledTimeSelected:function(o,p){c('PagesComposerActions').schedule(this.context.composerID,o,p);this._onClick();},_onDraftClicked:function(){c('PagesComposerActions').setDraft(this.context.composerID);this._onClick();},_onAdsPostClicked:function(){c('PagesComposerActions').setAdsPost(this.context.composerID);this._onClick();},_onPublishClicked:function(){this._onClick();},_onBackdateClicked:function(){var o=this.props.config.postButtonConfig,p=c('ReactDOM').render(c('React').createElement(c('PostBackdateDialog.react'),{maxTime:Date.now()/1000,minTime:o.minBackdateTime,onSubmit:this._onBackdateTimeSelected}),c('DOM').create('div'));!(p instanceof c('PostBackdateDialog.react'))?j(0):undefined;p.show();},_onBackdateTimeSelected:function(o,p,q,r){c('PagesComposerActions').backdate(this.context.composerID,o,p,q,r);this._onClick();},_onClick:function(){c('ReactComposerActions').postStarted(this.context.composerID,{actorID:this.context.actorID,config:this.props.config,targetID:this.context.targetID,onPostSuccess:c('ReactComposerSlideshowStore').isSlideshowSelected(this.context.composerID)?c('ReactComposerSlideshowUtils').onPostSuccess:c('emptyFunction')});}});f.exports=n;},null);
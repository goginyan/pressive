/**
 * contains general backbone views definitions
 */

/**
 * utility functions to use throughout Thrive products
 *
 * @type {object}
 */
var TVE_Dash = TVE_Dash || {};
TVE_Dash.views = TVE_Dash.views || {};

(
	function ( $ ) {

		/**
		 * base class for modals
		 *
		 * backbone view wrapped over a modal div from materialize
		 */
		TVE_Dash.views.Modal = Backbone.View.extend( {
			className: 'tvd-modal',
			id: 'tvd-modal-base',
			/* this will be populated with data coming from params when instantiating the view / modal */
			data: {},
			/**
			 * used to setup this.data field - it will set all constructor arguments into this.data so that they are available
			 * @param {object} args
			 */
			initialize: function ( args ) {

				this.beforeInitialize( args );

				this.data = args;
				var self = this;

				_.each( args, function ( v, k ) {

					if ( typeof self[k] === 'undefined' ) {
						self[k] = v;
					}
				} );

				this.afterInitialize( args );
			},
			/**
			 * we should not override this, use afterRender() instead
			 * this does not open the modal, it just renders it and appends it to the body tag
			 * @returns {TVE_Dash.views.Modal}
			 */
			render: function () {
				this.$el.empty();
				this.$el.appendTo( 'body' );
				// make the whole data object available to the template
				this.data = _.extend( {
					model: this.model
				}, this.data );

				this.$el.html( this.template( this.data ) );

				if ( this.data['max-width'] ) {
					/* max-width should always be sent in % */
					this.$el.css( 'max-width', this.data['max-width'] );
				} else {
					this.$el.css( 'max-width', '' );
				}

				if ( this.data['no_close'] ) {
					this.$el.find( '.tvd-modal-close' ).remove();
				} else if ( ! this.$el.children( '.tvd-modal-close' ).length ) {
					this.$el.append( '<a href="javascript:void(0)" class="tvd-modal-action tvd-modal-close tvd-modal-close-x"><i class="tvd-icon-close2"></i></a>' );
				}

				if ( this.data['title'] ) {
					var $title = this.$el.find( 'h3.tvd-modal-title' );
					if ( ! $title.length ) {
						$title = $( '<h3 class="tvd-modal-title"></h3>' );
						this.$el.find( '.tvd-modal-content' ).prepend( $title );
					}
					$title.html( this.data['title'] );
				}

				if ( this.data['width'] ) {
					this.$el.css( 'width', this.data['width'] );
				}
				if ( this.data['height'] ) {
					this.$el.css( 'height', this.data['height'] + 'px' );
				}

				/**
				 * rebind the wistia listeners
				 */
				if ( window.rebindWistiaFancyBoxes ) {
					window.rebindWistiaFancyBoxes();
				}

				this.afterRender();

				return this;
			},
			/**
			 * auto-focus the first input and bind the ENTER event
			 *
			 * @param {object} [$root] optional, jquery wrapper over a DOM element
			 */
			input_focus: function ( $root ) {
				$root = $root || this.$el;

				var $inputs = $root.find( 'input:not(.tvd-select-dropdown),textarea,.tve-confirm-delete-action' );
				$inputs.filter( ':visible' ).filter( ':not(.tvd-no-focus)' ).first().focus();

				$root.add( $inputs ).off( 'keyup.tvd-save' ).on( 'keyup.tvd-save', function ( e ) {
					if ( e.which === 13 ) {
						$root.find( '.tvd-modal-submit' ).filter( ':visible' ).first().click();
						return false;
					}
				} );
			},
			/**
			 * triggered immediately after the rendering is completed (after the template is added to DOM) but before showing the modal
			 * override this to populate extra stuff in the view
			 */
			afterRender: function () {
				return this;
			},
			/**
			 * open the modal
			 * options for the modal can be sent when instantiating the view
			 *
			 * @returns {TVE_Dash.Modal}
			 */
			open: function () {
				var self = this;

				var options = _.extend( {
					in_duration: 200,
					out_duration: 300,
					dismissible: true,
					ready: function () {
						self.onOpen.call( self );
						/**
						 * allow also 'afterOpen' callback
						 */
						if ( typeof self.afterOpen === 'function' ) {
							self.afterOpen.call( self );
						}
						TVE_Dash.materialize( self.$el );
						self.input_focus();
					},
					complete: function () {
						delete TVE_Dash.opened_modal_view;
						self.$el.css( 'width', '' ).css( 'height', '' );
						self.remove();
						self.onClose.call( self );
						/**
						 * allow also 'afterClose' callback
						 */
						if ( typeof self.afterClose === 'function' ) {
							self.afterClose.call( self );
						}
					}
				}, this.data );

				this.modal_options = options;

				this.$el.openModal( options );

				TVE_Dash.opened_modal_view = this;

				return this;
			},
			close: function () {
				this.$el.closeModal( this.modal_options );
				return this;
			},
			/**
			 * triggered after the modal has been opened
			 */
			onOpen: function () {
			},
			/**
			 * triggered after the modal has been closed and the html has been removed
			 */
			onClose: function () {
			},
			/**
			 * show a preloader over this modal
			 */
			showLoader: function () {
				var _loader = this.$el.find( '.tvd-modal-preloader' );
				if ( ! _loader.length ) {
					_loader = $( TVE_Dash.tpl( 'modal-loader', {} ) );
					this.$el.prepend( _loader );
				}
				_loader.css( 'top', (
				                    this.$el.height() / 2 + this.$el.scrollTop()
				                    ) + 'px' );
				_loader.fadeIn();
				this.$el.addClass( 'tvd-modal-disable' );

				return this;
			},
			/**
			 * hide the preloader
			 */
			hideLoader: function () {
				this.$el.removeClass( 'tvd-modal-disable' );
				this.$el.find( '.tvd-modal-preloader' ).fadeOut();

				return this;
			},
			/**
			 * set the loading state on a button
			 * @param $btn
			 * @returns {*}
			 */
			btnLoading: function ( $btn ) {
				return jQuery( $btn ).addClass( 'tvd-disabled' ).prop( 'disabled', true );
			},
			beforeInitialize: function ( args ) {
				return this;
			},
			afterInitialize: function ( args ) {
				return this;
			}
		} );

		/**
		 * page loader view
		 * shows a global page loader
		 */
		TVE_Dash.views.PageLoader = Backbone.View.extend( {
			_state: 'closed',
			render: function () {
				this.$el.html( TVE_Dash.tpl( 'page-loader', {} ) );
				this.$el.appendTo( 'body' );
				this.loader = this.$el.find( '#tvd-hide-onload' );
			},
			open: function () {
				this.loader.show();
			},
			close: function () {
				var self = this;
				setTimeout( function () {
					self.loader.fadeOut( 100 );
				}, 200 );
			}
		} );

	}
)( jQuery );
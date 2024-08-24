<?php

return [
    'columns.title' => 'Title',
    'columns.is_published' => 'Published',
    'columns.is_published_state_published' => 'Published',
    'columns.is_published_state_unpublished' => 'Unavailable',
    'columns.is_published_state_published_future_info' => 'will be published on :date',
    'columns.is_published_state_unpublished_future_info' => 'will be unavailable on :date',

    'filter.is_published.label' => 'Show published:',
    'filter.is_published.published_label' => 'Published',
    'filter.is_published.unpublished_label' => 'Unpublished',

    'table_action.publish.publish_notification_success_title' => 'Published!',
    'table_action.publish.publish_notification_success_msg' => 'The page is now published.',
    'table_action.publish.publish_notification_error_title' => 'Error',
    'table_action.publish.unpublish_notification_success_title' => 'Unpublished!',
    'table_action.publish.unpublish_notification_success_msg' => 'The page is unpublished.',
    'table_action.publish.unpublish_notification_error_title' => 'Error',
    'table_action.publish.publish_lbl' => 'Publish',
    'table_action.publish.unpublish_lbl' => 'Unpublish',
    'table_action.view_page_lbl' => 'View',

    'form_component.translatable_hint' => 'You can translate this field.',
    'form_component.translatable_image_hint' => 'You can add a translated image.',
    'form_component.title_lbl' => 'Title',
    'form_component.slug_lbl' => 'Slug',
    'form_component.slug_desc' => '<strong>Attention:</strong> When you change the slug of a published page, the URL will change.',
    'form_component.code_lbl' => 'Code',
    'form_component.code_help' => 'This is a unique code for developers to look up this page from the application code. Therefore, it cannot be edited after creation.',
    'form_component.publishing_begins_at_lbl' => 'Publish from',
    'form_component.publishing_ends_at_lbl' => 'Publish until',
    'form_component.publication_section_title' => 'Publication',
    'form_component.seo_title_lbl' => 'SEO title',
    'form_component.seo_description_lbl' => 'SEO description',
    'form_component.seo_image_lbl' => 'SEO image',
    'form_component.seo_keywords_lbl' => 'SEO keywords',
    'form_component.overview_title_lbl' => 'Overview title',
    'form_component.overview_description_lbl' => 'Overview description',
    'form_component.overview_image_lbl' => 'Overview image',
    'form_component.author_lbl' => 'Author',
    'form_component.hero_image_lbl' => 'Hero image',
    'form_component.hero_image_title_lbl' => 'Hero image title',
    'form_component.hero_image_copyright_lbl' => 'Hero image copyright',
    'form_component.hero_image_section_title' => 'Hero image',
    'form_component.intro_lbl' => 'Introduction',
    'form_component.content_blocks_lbl' => 'Body',
    'form_component.content_blocks_add_lbl' => 'Add block',
    'form_component.image_position_lbl' => 'Image position',
    'form_component.image_position_help' => 'Select the position of the image in relation to the text block.',
    'form_component.block_style_lbl' => 'Block style',
    'form_component.block_style_help' => 'This will render the block in a different way.',
    'form_component.image_width_lbl' => 'Image width',
    'form_component.background_colour_lbl' => 'Background colour',
    'form_component.copy_content_blocks_to_other_locales_lbl' => 'Copy content blocks to other languages',
    'form_component.copy_content_blocks_to_other_locales.error_resource_not_translatable' => 'The Filament resource is not translatable or this page does not have a LocaleSwitch. See Filament docs.',
    'form_component.copy_content_blocks_to_other_locales.error_model_not_translatable' => 'The model is not translatable.',
    'form_component.copy_content_blocks_to_other_locales.success' => 'The content blocks are copied to the other languages!',
    'form_component.copy_content_blocks_to_other_locales.error' => 'An error occurred while copying the content blocks: <strong>:error</strong>',
    'form_component.copy_content_blocks_to_other_locales.modal_heading' => 'Copy content blocks',
    'form_component.copy_content_blocks_to_other_locales.modal_subheading' => 'This will copy all content blocks of this language to all other languages. Existing translated content blocks will be deleted and overwritten! Are you sure?',
    'form_component.copy_content_blocks_to_other_locales.modal_button' => 'Copy content blocks',
    'form_component.content_blocks.overview.label' => 'Overview list',
    'form_component.content_blocks.overview.title' => 'Title',
    'form_component.content_blocks.overview.items' => 'Overview',
    'form_component.content_blocks.overview.overview_model' => 'Type',
    'form_component.content_blocks.overview.overview_item' => 'Item',

    'form_component.content_blocks.text-image.label' => 'Text (+ image)',
    'form_component.content_blocks.text-image.title' => 'Title',
    'form_component.content_blocks.text-image.text' => 'Text',
    'form_component.content_blocks.text-image.image' => 'Image',
    'form_component.content_blocks.text-image.image_title' => 'Image title',
    'form_component.content_blocks.text-image.image_copyright' => 'Image copyright',
    'form_component.content_blocks.text-image.call_to_action' => 'Call to action',
    'form_component.content_blocks.text.title' => 'Title',
    'form_component.content_blocks.text.label' => 'Text',
    'form_component.content_blocks.video.label' => 'Video',
    'form_component.content_blocks.video.embed_url' => 'Media url',
    'form_component.content_blocks.video.help' => 'Add the url, e.g. from a YouTube or Vimeo video.',
    'form_component.content_blocks.video.overlay_image' => 'Overlay image',
    'form_component.content_blocks.video.sr_msg' => 'Play video',
    'form_component.content_blocks.html.title' => 'HTML',
    'form_component.content_blocks.html.label' => 'HTML',
    'form_component.content_blocks.html.help' => 'Pay attention that the HTML is sanitised and does not contain malicious scripts or styling that breaks the default page.',
    'form_component.content_blocks.quote.label' => 'Quote',
    'form_component.content_blocks.quote.quote' => 'Quote',
    'form_component.content_blocks.quote.author' => 'Author',
    'form_component.content_blocks.image.label' => 'Image',
    'form_component.content_blocks.image.image' => 'Image',
    'form_component.content_blocks.image.image_title' => 'Image title',
    'form_component.content_blocks.image.image_copyright' => 'Image copyright',
    'form_component.content_blocks.call-to-action.label' => 'Call to action',
    'form_component.content_blocks.call-to-action.title' => 'Title',
    'form_component.content_blocks.call-to-action.text' => 'Text',
    'form_component.content_blocks.call-to-action.image' => 'Image',
    'form_component.content_blocks.call-to-action.image_title' => 'Image title',
    'form_component.content_blocks.call-to-action.image_copyright' => 'Image copyright',
    'form_component.content_blocks.call-to-action.call_to_action' => 'Call to action',
    'form_component.content_blocks.cards.label' => 'Cards',
    'form_component.content_blocks.cards.title' => 'Title',
    'form_component.content_blocks.cards.cards' => 'Cards',
    'form_component.content_blocks.cards.card_title' => 'Card title',
    'form_component.content_blocks.cards.card_text' => 'Card text',
    'form_component.content_blocks.cards.card_image' => 'Card image',
    'form_component.content_blocks.template.label' => 'Template',
    'form_component.content_blocks.template.template' => 'Template',

    'form_component.content_blocks.image_position.left' => 'Left',
    'form_component.content_blocks.image_position.center' => 'Center',
    'form_component.content_blocks.image_position.right' => 'Right',

    'form_component.content_blocks.image_width.100%' => 'Full',
    'form_component.content_blocks.image_width.75%' => '3/4',
    'form_component.content_blocks.image_width.50%' => '1/2',
    'form_component.content_blocks.image_width.33%' => '1/3',
    'form_component.content_blocks.image_width.25%' => '1/4',

    'form_component.content_blocks.call_to_action_btn.primary' => 'Primary',
    'form_component.content_blocks.call_to_action_btn.primary_chevron' => 'Primary >',
    'form_component.content_blocks.call_to_action_btn.secondary' => 'Secondary',
    'form_component.content_blocks.call_to_action_btn.secondary_chevron' => 'Secondary >',
    'form_component.content_blocks.call_to_action_btn.ghost' => 'Transparent',
    'form_component.content_blocks.call_to_action_btn.ghost_chevron' => 'Transparent >',
    'form_component.content_blocks.call_to_action_btn.link' => 'Link',
    'form_component.content_blocks.call_to_action_btn.link_chevron' => 'Link >',

    'form_component.content_blocks.call_to_action_lbl' => 'Call to action',
    'form_component.content_blocks.add_call_to_action' => 'Add call to action',
    'form_component.content_blocks.call_to_action_model_type_url' => 'URL',
    'form_component.content_blocks.call_to_action_model_type_route' => 'Route',
    'form_component.content_blocks.call_to_action_cta_model' => 'Type',
    'form_component.content_blocks.call_to_action_entry_id' => 'Page',
    'form_component.content_blocks.call_to_action_button_style' => 'Button style',
    'form_component.content_blocks.call_to_action_button_label' => 'Button label',
    'form_component.content_blocks.call_to_action_button_open_in_new_window' => 'Open in new window?',
    'form_component.content_blocks.call_to_action_route' => 'Route',

    'form_component.content_blocks.background_colour.default' => 'Default',
    'form_component.content_blocks.background_colour.primary' => 'Primary',
    'form_component.content_blocks.background_colour.secondary' => 'Secondary',
    'form_component.content_blocks.background_colour.light' => 'Light',

    'form_component.content_blocks.block_styles.default' => 'Default',

    'form_component.grid_columns_lbl' => 'Number of columns',

    'form_component.image_conversion_type_lbl' => 'Image conversion',
    'form_component.image_conversion_type_crop' => 'Crop',
    'form_component.image_conversion_type_contain' => 'Contain aspect ratio',

    'form_component.content_blocks.templates_options.footer' => 'Footer',

    'form_component.media_embed.validation' => 'Included url is not a valid media url.',

    'form_component.parent_lbl' => 'Parent content',
    'form_component.parent_help' => 'Choose the content that this content should appear under. The slug of the parent content will be displayed in front of this content\'s slug in the URL.',

    'form_action.seo_ai_action.name' => 'Generate SEO data',
    'form_action.seo_ai_action.name_on_create' => 'Generate SEO data (only on edit!)',
    'form_action.seo_ai_action.generated_success' => 'The SEO fields are generated!',
    'form_action.seo_ai_action.generated_no_response' => 'There was no response from the AI service...',
    'form_action.seo_ai_action.generated_error' => 'Something went wrong contacting AI service. Try again later.',
];

# # BaseMailThread

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the mail thread | [optional]
**account_id** | **string** | The connection account ID | [optional]
**user_id** | **int** | ID of the user whom mail message will be assigned to | [optional]
**subject** | **string** | The subject | [optional]
**snippet** | **string** | A snippet | [optional]
**read_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread is read | [optional]
**mail_tracking_status** | **string** | Mail tracking status | [optional]
**has_attachments_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread has an attachment | [optional]
**has_inline_attachments_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread has inline attachments | [optional]
**has_real_attachments_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread has real attachments (which are not inline) | [optional]
**deleted_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread is deleted | [optional]
**synced_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread is synced | [optional]
**smart_bcc_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether one of the parties of the mail thread is Bcc | [optional]
**mail_link_tracking_enabled_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the link tracking of the mail thread is enabled | [optional]
**parties** | [**\Pipedrive\Model\BaseMailThreadAllOfParties**](BaseMailThreadAllOfParties.md) |  | [optional]
**drafts_parties** | **object[]** | Parties of the drafted mail thread | [optional]
**folders** | **string[]** | Folders in which messages from thread are being stored | [optional]
**version** | **float** | Version | [optional]
**snippet_draft** | **string** | A snippet from a draft | [optional]
**snippet_sent** | **string** | A snippet from a message sent | [optional]
**message_count** | **int** | An amount of messages | [optional]
**has_draft_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread has any drafts | [optional]
**has_sent_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread has messages sent | [optional]
**archived_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread is archived | [optional]
**shared_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread is shared | [optional]
**external_deleted_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread has been deleted externally | [optional]
**first_message_to_me_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether the mail thread was initialized by others | [optional]
**last_message_timestamp** | **\DateTime** | Last message timestamp | [optional]
**first_message_timestamp** | **\DateTime** | The time when the mail thread has had the first message received or created | [optional]
**last_message_sent_timestamp** | **\DateTime** | The last time when the mail thread has had a message sent | [optional]
**last_message_received_timestamp** | **\DateTime** | The last time when the mail thread has had a message received | [optional]
**add_time** | **\DateTime** | The time when the mail thread was inserted to database | [optional]
**update_time** | **\DateTime** | The time when the mail thread was updated in database received | [optional]
**deal_id** | **int** | The ID of the deal | [optional]
**deal_status** | **string** | Status of the deal | [optional]
**lead_id** | **string** | The ID of the lead | [optional]
**all_messages_sent_flag** | [**NumberBooleanDefault0**](NumberBooleanDefault0.md) | Whether all the mail thread messages have been sent | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
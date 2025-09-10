import { defineConfig } from 'vite'
import { resolve } from 'path'

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        airtime_vend_request: resolve(__dirname, 'airtime_vend_request.html'),
        betting_services: resolve(__dirname, 'betting_services.html'),
        cabletv_multichoice: resolve(__dirname, 'cabletv_multichoice.html'),
        cabletv_startimes: resolve(__dirname, 'cabletv_startimes.html'),
        data_plans: resolve(__dirname, 'data_plans.html'),
        data_vend_request: resolve(__dirname, 'data_vend_request.html'),
        electricity_validation_requests: resolve(__dirname, 'electricity_validation_requests.html'),
        electricity_vending_requests: resolve(__dirname, 'electricity_vending_requests.html'),
        error_codes: resolve(__dirname, 'error_codes.html'),
        get_merchant_info: resolve(__dirname, 'get_merchant_info.html'),
        insurance: resolve(__dirname, 'insurance.html'),
        integration_flow: resolve(__dirname, 'integration_flow.html'),
        international_services: resolve(__dirname, 'international_services.html'),
        logical_pins: resolve(__dirname, 'logical_pins.html'),
        low_balance_service: resolve(__dirname, 'low_balance_service.html'),
        phone_number_lookup: resolve(__dirname, 'phone_number_lookup.html'),
        requery_transaction: resolve(__dirname, 'requery_transaction.html'),
        requery: resolve(__dirname, 'requery.html'),
        security_checksum: resolve(__dirname, 'security_checksum.html'),
        security_generation_snips: resolve(__dirname, 'security_generation_snips.html'),
        send_sms: resolve(__dirname, 'send_sms.html'),
        services: resolve(__dirname, 'services.html'),
        showmax: resolve(__dirname, 'showmax.html'),
        toll_services: resolve(__dirname, 'toll_services.html'),
        ussd: resolve(__dirname, 'ussd.html'),
        utility_advance_service: resolve(__dirname, 'utility_advance_service.html'),

      },
    },
  },
})

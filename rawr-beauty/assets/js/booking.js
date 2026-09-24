/**
 * RAWR Beauty Booking Logic & WhatsApp Pre-fill Generator
 */
window.rawrGenerateBookingMessage = function (details) {
  return `Hi! I would like to book a RAWR Beauty session:
- Service: ${details.service || 'Selected Treatment'}
- Location: ${details.location || 'Doorstep Home Service'}
- Preferred Date: ${details.date || 'Soonest available'}
- Client: ${details.name || 'Valued Client'}`;
};

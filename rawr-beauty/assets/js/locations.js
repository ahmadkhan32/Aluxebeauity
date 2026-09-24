/**
 * RAWR Beauty Locations Helper
 */
window.rawrFilterLocations = function (locations, keyword) {
  if (!keyword) return locations;
  keyword = keyword.toLowerCase();
  return locations.filter(function (loc) {
    return (
      (loc.name && loc.name.toLowerCase().includes(keyword)) ||
      (loc.address && loc.address.toLowerCase().includes(keyword)) ||
      (loc.postcode && loc.postcode.toLowerCase().includes(keyword))
    );
  });
};

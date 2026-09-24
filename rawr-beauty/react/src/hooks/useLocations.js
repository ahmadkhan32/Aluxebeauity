import { useState, useEffect } from "react";

export function useLocations() {
  const [locations, setLocations] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    fetch("/wp-json/rawr/v1/locations")
      .then((res) => (res.ok ? res.json() : []))
      .then((data) => {
        setLocations(data);
        setLoading(false);
      })
      .catch(() => {
        setLocations([
          { id: 1, title: "London Oxford St", address: "Primark Oxford St, London", phone: "07398 926226", status: "Active" },
          { id: 2, title: "Birmingham", address: "High St, Birmingham", phone: "07398 926226", status: "Active" },
          { id: 3, title: "Manchester", address: "Market St, Manchester", phone: "07398 926226", status: "Active" },
        ]);
        setLoading(false);
      });
  }, []);

  return { locations, loading };
}
